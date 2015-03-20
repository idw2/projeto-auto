<?php

Class Veiculos extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->getCallWS();
        $this->run();
    }

    public function index_action() {
        $this->veiculos_lista();
    }
    
    public function veiculos_lista() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $model = new Produtos_Model();

            $this->get_smarty();

            $lista = $model->get_produtos_all();
            
            if ($lista) {
                $this->assign("produtos", $lista);
            }

            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Lista de veículos");
            $this->view_tpl("admin/veiculos_lista");
        }
    }

    public function status() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Produtos_Model();
            $model->update_status($key, $stt);
            echo "OK";
        }
    }
    
    public function novidade() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Produtos_Model();
            $model->update_novidade($key, $stt);
            echo "OK";
        }
    }

    public function delete() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $arr = $this->array_url();
            $key = $arr[0];
            
            $model = new Produtos_Model();
            $fotos = $model->get_fotos_all($key);
            
            if( sizeof($fotos) > 0 ){
                foreach( $fotos as $foto ){
                    $foto->CODFOTO = strtoupper($foto->CODFOTO); 
                    if(is_dir(getcwd().$foto->RAIZ)){
                        if(file_exists(getcwd().$foto->ORIGINAL)){
                            @unlink($foto->ORIGINAL);
                        }
                        if(file_exists(getcwd().$foto->CROP770)){
                            @unlink($foto->CROP770);
                        }
                        if(file_exists(getcwd().$foto->CROP550)){
                           @unlink(getcwd().$foto->CROP550);
                        }
                        if(file_exists(getcwd().$foto->CROP268)){
                           @unlink(getcwd().$foto->CROP268);
                        }                        
                       @rmdir(getcwd().$foto->RAIZ);
                   }
                   $model->del_foto($foto->CODFOTO);
                   $model->del_rel_foto($foto->CODFOTO);
                }                  
            }
            
           $model->del_produto($key);
           echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
        }
    }

    public function cadastrar() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {
            
            $this->get_smarty();
            $erro = "";
            $sucesso = "FALSE";

            if ($_POST) {
               
                foreach( $_POST as $n => $v ){
                    
                    $this->assign($n, $v);
                }                   
                
                $preco = $_POST["preco"];
                $nome = $_POST["nome"];
                $categoria = $_POST["categoria"];
                $linha_1 = $_POST["linha_1"];
                $linha_2 = $_POST["linha_2"];
                $linha_3 = $_POST["linha_3"];
                
                $ano = $_POST["ano"];
                $km = $_POST["quilometragem"];
                $cor = $_POST["cor"];
                $combustivel = $_POST["combustivel"];
                $portas = $_POST["portas"];
                $final_placa = $_POST["placa"];
                $carroceria = $_POST["carroceria"];
                $especificacoes = $_POST["especificacoes"];

                if ($preco == "") {
                    $erro = "Preço requerido!";
                } else if ($nome == "") {
                    $erro = "Nome requerido!";
                } else {

                    $model = new Produtos_Model();

                    $url_amigavel = $this->url_amigavel($nome);
                    $preco = str_replace(",", "", $preco);
                    $preco = str_replace(".", "", $preco);
                    $km = str_replace(",", "", $km);
                    $km = str_replace(".", "", $km);


                    if ($model->existe_url_amigavel($url_amigavel)) {
                        $check = true;
                        $i = 1;
                        while ($check) {
                            if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
                                $check = true;
                            } else {
                                $url_amigavel = $url_amigavel . "-" . $i;
                                $check = false;
                            }
                            $i++;
                        }
                    }

                    $dados["CODPRODUTO"] = $this->getPrimarykey();
                    $dados["NOME"] = utf8_encode($nome);
                    $dados["URL_AMIGAVEL"] = $url_amigavel;
                    $dados["CATEGORIA"] = $categoria;
                    $dados["PRECO"] = $preco;
                    $dados["LINHA_1"] = utf8_encode($linha_1);
                    $dados["LINHA_2"] = utf8_encode($linha_2);
                    $dados["LINHA_3"] = utf8_encode($linha_3);
                    $dados["DESTAQUE"] = 0;
                    $dados["STATUS"] = 1;
                    $dados["ANO"] = utf8_encode($ano);
                    $dados["KM"] = $km;
                    $dados["COR"] = utf8_encode($cor);
                    $dados["COMBUSTIVEL"] = utf8_encode($combustivel);
                    $dados["PORTAS"] = $portas;
                    $dados["FINAL_PLACA"] = utf8_encode($final_placa);
                    $dados["CARROCERIA"] = utf8_encode($carroceria);
                    $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));
                    
                    if ($model->insert_produto($dados)) {
                        echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
                    }
                }
            }


            
            $this->assign("language", LANGUAGE);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Cadastro de veículos");
            $this->view_tpl("admin/cadastrar");
        }
    }

    public function editar() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $erro = "";
            $sucesso = "FALSE";

            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Produtos_Model();
            $produto = $model->get_produto($key);

            if ($produto) {
                $produto->PRECO = $this->formataReais($produto->PRECO);
                $produto->NOME = utf8_decode($produto->NOME);
                $produto->LINHA_1 = utf8_decode($produto->LINHA_1);
                $produto->LINHA_2 = utf8_decode($produto->LINHA_2);
                $produto->LINHA_3 = utf8_decode($produto->LINHA_3);
                $produto->COR = utf8_decode($produto->COR);
                $produto->COMBUSTIVEL = utf8_decode($produto->COMBUSTIVEL);
                $produto->FINAL_PLACA = utf8_decode($produto->FINAL_PLACA);
                $produto->ESPECIFICACOES = utf8_decode($produto->ESPECIFICACOES);
                $produto->KM = $this->formataReais($produto->KM);

                $this->assign("produto", $produto);
                $this->assign("url_amigavel", $key);
            }

            if ($_POST) {

                $preco = $_POST["preco"];
                $nome = $_POST["nome"];
                $categoria = $_POST["categoria"];
                $linha_1 = $_POST["linha_1"];
                $linha_2 = $_POST["linha_2"];
                $linha_3 = $_POST["linha_3"];
                
                $ano = $_POST["ano"];
                $km = $_POST["quilometragem"];
                $cor = $_POST["cor"];
                $combustivel = $_POST["combustivel"];
                $portas = $_POST["portas"];
                $final_placa = $_POST["placa"];
                $carroceria = $_POST["carroceria"];
                $especificacoes = $_POST["especificacoes"];

                if ($preco == "") {
                    $erro = "Preço requerido!";
                } else if ($nome == "") {
                    $erro = "Nome requerido!";
                } else {

                    $model = new Produtos_Model();

                    $url_amigavel = $this->url_amigavel($nome);
                    $preco = str_replace(",", "", $preco);
                    $preco = str_replace(".", "", $preco);
                    $km = str_replace(",", "", $km);
                    $km = str_replace(".", "", $km);

                    if ($model->existe_url_amigavel($url_amigavel)) {
                        $check = true;
                        $i = 1;
                        while ($check) {
                            if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
                                $check = true;
                            } else {
                                $url_amigavel = $url_amigavel . "-" . $i;
                                $check = false;
                            }
                            $i++;
                        }
                    }

                    $dados["NOME"] = utf8_encode($nome);
                    $dados["URL_AMIGAVEL"] = $url_amigavel;
                    $dados["CATEGORIA"] = $categoria;
                    $dados["PRECO"] = $preco;
                    $dados["LINHA_1"] = utf8_encode($linha_1);
                    $dados["LINHA_2"] = utf8_encode($linha_2);
                    $dados["LINHA_3"] = utf8_encode($linha_3);
                    $dados["ANO"] = utf8_encode($ano);
                    $dados["KM"] = $km;
                    $dados["COR"] = utf8_encode($cor);
                    $dados["COMBUSTIVEL"] = utf8_encode($combustivel);
                    $dados["PORTAS"] = $portas;
                    $dados["FINAL_PLACA"] = utf8_encode($final_placa);
                    $dados["CARROCERIA"] = utf8_encode($carroceria);
                    $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));

                    if ($model->update_produto($dados, $produto->CODPRODUTO)) {
                        echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
                    }
                }
            }

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Editar veículo");
            $this->view_tpl("admin/editar");
        }
    }

    public function fotos() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $erro = "";
            $sucesso = "FALSE";

            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Produtos_Model();
            $produto = $model->get_produto($key);

            if ($produto){
                
                $produto->PRECO = $this->formataReais($produto->PRECO);
                $produto->NOME = utf8_decode($produto->NOME);
                $produto->LINHA_1 = utf8_decode($produto->LINHA_1);
                $produto->LINHA_2 = utf8_decode($produto->LINHA_2);
                $produto->LINHA_3 = utf8_decode($produto->LINHA_3);

                $this->assign("produto", $produto);
                $this->assign("url_amigavel", $key);
            }

            $fotos = $model->get_fotos_all($key);

            if ($fotos) {
                $this->assign("fotos", $fotos);
            }

            $this->assign("url_amigavel", $key);
            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Lista de fotos");
            $this->view_tpl("admin/fotos");
        }
    }

    public function delete_foto() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {
            $codfoto = strtoupper($this->getParameters("codfoto"));
            $url_amigavel = $this->getParameters("url");
            $model = new Produtos_Model();
            $foto = $model->get_foto($codfoto);

            if ($foto) {

                $rootdir = getcwd();
                $_filename1 = $rootdir . $foto->ORIGINAL;
                $_filename2 = $rootdir . $foto->CROP;
                $_diretorio = $rootdir . $foto->RAIZ;

                if (file_exists($_filename1)) {
                    @unlink($_filename1);
                }

                if (file_exists($_filename2)) {
                    @unlink($_filename2);
                }

                if (is_dir($_diretorio)) {
                    @rmdir($dir);
                }

                $model->del_rel_foto($codfoto);
                $model->del_foto($codfoto);
                echo "<script>window.location='/" . LANGUAGE . "/veiculos/fotos/" . $url_amigavel . "'</script>";
            }
        }
    }

    public function foto_status() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $codfoto = strtoupper($this->getParameters("codfoto"));
            $stt = $this->getParameters("status");
            $url_amigavel = $this->getParameters("url");

            $model = new Produtos_Model();
            $model->update_status_foto($codfoto, $stt);

            echo "<script>window.location='/" . LANGUAGE . "/veiculos/fotos/" . $url_amigavel . "'</script>";
        }
    }

    public function foto_destaque() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $codfoto = strtoupper($this->getParameters("codfoto"));
            $url_amigavel = $this->getParameters("url");

            $model = new Produtos_Model();
            $model->update_destaque_foto($codfoto);

            echo "<script>window.location='/" . LANGUAGE . "/veiculos/fotos/" . $url_amigavel . "'</script>";
        }
    }

    public function destaque() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $arr = $this->array_url();
            $indice = $arr[0];
            $url_amigavel = $arr[1];

            $model = new Produtos_Model();
            
            $model->update_destaque_produto($dados, $url_amigavel);
            echo "OK";
//            
//            if( (int) $model->qnts_destaques_produtos($indice) < 4 && $indice == 1){
//                $dados["DESTAQUE"] = 1;
//                if( $model->update_destaque_produto($dados, $url_amigavel) ){
//                    //echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos_lista/" . $url_amigavel . "'</script>";
//                }
//            } else {
//                if( $indice == 0 ){
//                     $dados["DESTAQUE"] = 0;
//                    if($model->update_destaque_produto($dados, $url_amigavel)){
//                        //echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos_lista/" . $url_amigavel . "'</script>";
//                    }
//                    //echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos_lista/" . $url_amigavel . "'</script>";
//                }else{
//                    //echo "<script>alert('* Limite de carros em destaque excedido!')</script>";
//                    //echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos_lista/" . $url_amigavel . "'</script>";
//                }
//                
//            }
                
            
        }
    }
}
