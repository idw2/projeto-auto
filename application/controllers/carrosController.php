<?php

Class Carros extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->getCallWS();
    }

    function detalhes() {

//        $model = new Produtos_Model();
        if ($_POST) {

            header('Content-Type: application/json');

            $nome = ($_POST["nome"] == "Nome completo" || $_POST["nome"] == "") ? "" : addslashes(trim($_POST["nome"]));
            $email = ($_POST["email"] == "E-mail" || $_POST["email"] == "") ? "" : addslashes(trim($_POST["email"]));
            $email_recipiente = $_POST["email_recipiente"];
            $telefone = "(" . $_POST["ddd"] . ") " . $_POST["telefone"];
            $alias = $_POST["alias"];
            $mensagem = stripslashes($_POST["mensagem"]);
            $site = $_POST["site"];

            if ($nome == "" || substr_count($nome, " ") < 1) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Por favor, informe seu nome completo!</span>";
                echo json_encode($data);
            } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* E-mail inválido!</span>";
                echo json_encode($data);
            } else if ($mensagem == "" || substr_count($mensagem, " ") < 5) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Por favor, formular sua mensagem!</span>";
                echo json_encode($data);
            } else {

                $vars['nome'] = $nome;
                $vars['email'] = $email;
                $vars['telefone'] = $telefone;
                $vars['email_recipiente'] = $email_recipiente;
                $vars['alias'] = $alias;
                $vars['assunto'] = $assunto;
                $vars['mensagem'] = $mensagem;
                $vars['site'] = $site;

                /*
                 * 
                 * CHAMADA NO WEBSERVICE QUE PEGA OS DADOS DA CONTA 
                 * 
                 */
                $getConta = $this->convertReturnWS_base64($this->getWsservidor("getConta", SITE), "OBJECT");

                /*                 * ***   MENSAGEM DIRIGIDA AO VISITANTE DO SITE   **** */
                $quebra_linha = "\n";
                $emailsender = $email_recipiente;
                $nomeremetente = $getConta->NOME_RAZAO_SOCIAL;
                $emaildesitnatario = $email;
                $assunto_texto = $getConta->NOME_RAZAO_SOCIAL . " - Agradecemos o contato";
                $assunto = "=?UTF-8?B?" . base64_encode($assunto_texto) . "?=";

                $mensagemHTML = $this->view_email("emails/contato_agradecimento", $vars);

                $headers = "MIME-Version: 1.1{$quebra_linha}";
                $headers .= "Content-type: text/html; charset=UTF-8{$quebra_linha}";
                $headers .= "From: \"{$nomeremetente}\"<{$emailsender}>{$quebra_linha}";
                $headers .= "Return-Path: {$emailsender}{$quebra_linha}";
                //$headers .= "Cc: {$comcopia}{$quebra_linha}";
                $headers .= "Reply-To: {$emaildesitnatario}{$quebra_linha}";
                $headers .= "X-Mailer: PHP/" . phpversion();

                mail($emaildesitnatario, $assunto, $mensagemHTML, $headers, $alias . $emailsender);

                /*                 * ***   MENSAGEM DIRIGIDA AO ADMINISTRADOR DO SITE   **** */
                $quebra_linha = "\n";
                $emailsender = $email_recipiente;
                $nomeremetente = $getConta->NOME_RAZAO_SOCIAL;
                $emaildesitnatario = $email_recipiente;
                $assunto_texto = $getConta->NOME_RAZAO_SOCIAL . " - Mensagem Fale conosco";
                $assunto = "=?UTF-8?B?" . base64_encode($assunto_texto) . "?=";

                $mensagemHTML = $this->view_email("emails/proposta", $vars);

                $headers = "MIME-Version: 1.1{$quebra_linha}";
                $headers .= "Content-type: text/html; charset=UTF-8{$quebra_linha}";
                $headers .= "From: \"{$nomeremetente}\"<{$emailsender}>{$quebra_linha}";
                $headers .= "Return-Path: {$emailsender}{$quebra_linha}";
                //$headers .= "Cc: {$comcopia}{$quebra_linha}";
                $headers .= "Reply-To: {$emaildesitnatario}{$quebra_linha}";
                $headers .= "X-Mailer: PHP/" . phpversion();

                mail($emaildesitnatario, $assunto, $mensagemHTML, $headers, $alias . $emailsender);




                $data['erro'] = "";
                $data['success'] = "<span style='color: #00A9FF; font-weight: bold'>* Mensagem enviada com sucesso!</span>";
                echo json_encode($data);
                die();
            }
            die();
        }
        /*
         * 
         * CHAMADA NO WEBSERVICE OS FABRICANTES 
         * 
         */
        $fabricantes = $this->convertReturnWS_base64($this->getWsservidor("getList_fabricantes"), "OBJECT");
        $this->assign("fabricantes", $fabricantes);

        $fabricantes_vender = $this->convertReturnWS_base64($this->getWsservidor("getList_fabricantes_vender"), "OBJECT");
        $this->assign("fabricantes_vender", $fabricantes_vender);

        $arr = $this->array_url();
        $url_amigavel = trim($arr[0]);

        /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO SEMINOVOS
         * 
         */
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
        $dadosXML .= '<REQUISICAO>';
        $dadosXML .= '<CATEGORIA><![CDATA[]]></CATEGORIA>';
        $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
        $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
        $dadosXML .= '<URL_AMIGAVEL><![CDATA[' . $url_amigavel . ']]></URL_AMIGAVEL>';
        $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';

        $carro = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos", base64_encode($dadosXML)), "OBJECT");

//        
//        var_dump($carros); die();
//        
        if ($carro) {

//            $carro = (Object) $carro;
//            
//            foreach ($carros as $name=>$value){
//                $carro->$name = $value;
//            }
//            
//            var_dump($carro);
//            die();
            $this->assign("carro", $carro);
        }
//        
//        var_dump($carro);
//        die();
//        
        /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO SEMINOVOS
         * 
         */
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
        $dadosXML .= '<REQUISICAO>';
        $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
        $dadosXML .= '<URL_AMIGAVEL><![CDATA[' . $url_amigavel . ']]></URL_AMIGAVEL>';
        $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';

        $fotos = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos_fotos", base64_encode($dadosXML)), "OBJECT");

        if ($fotos) {

            $this->assign("fotos", $fotos);
        }



//        $params = $this->getParameters();
//        $slug = $params[0];
//        $veiculo = $model->get_produto($slug);
//        $fotos = (array) $model->get_fotos_all($slug);
//        $similares = $model->get_similares($slug);
        // SAÍDA
//        setlocale(LC_MONETARY, 'pt_BR.UTF-8');
//        $veiculo->PRECO = money_format('%.2n', ($veiculo->PRECO/100));
//        $veiculo->KM = number_format($veiculo->KM,0,",",".");
//        $cambio = array('Manual', 'Automático');
//        $veiculo->CAMBIO = ( in_array($veiculo->LINHA_1, $cambio)) ? $veiculo->LINHA_1 : null ;
//        foreach($veiculo as $k=>$v){
//            $veiculo->$k = ($v != '') ? $v : 'N/A';
//        }
//        $this->assign("veiculo", $veiculo);
//        $this->assign("fotos", $fotos);
//        $this->assign("similares", $similares);

        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "novidades");
        $this->assign("title", TITLE . "Novidades");

        $this->view_tpl("detalhes");
    }

    function vender() {

        if ($_POST) {

            header('Content-Type: application/json');

            $fabricante = ($_POST["fabricante"] == "Fabricante" || $_POST["fabricante"] == "") ? "" : addslashes(trim($_POST["fabricante"]));
            $modelo = ($_POST["modelo"] == "Modelo" || $_POST["modelo"] == "") ? "" : addslashes(trim($_POST["modelo"]));
            $ano = ($_POST["ano"] == "Ano" || $_POST["ano"] == "") ? "" : addslashes(trim($_POST["ano"]));
            $versao = ($_POST["versao"] == "Versão" || $_POST["versao"] == "") ? "" : addslashes(trim($_POST["versao"]));
            $email_recipiente = $_POST["email_recipiente"];
            $email = ($_POST["email"] == "E-mail" || $_POST["email"] == "") ? "" : addslashes(trim($_POST["email"]));
            $site = $_POST["site"];

            if ($fabricante == "" || substr_count($fabricante, " ") < 1) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Por favor, informe a marca!</span>";
                echo json_encode($data);
            } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* E-mail inválido!</span>";
                echo json_encode($data);
            } else {

                $vars['fabricante'] = $fabricante;
                $vars['modelo'] = $modelo;
                $vars['ano'] = $ano;
                $vars['versao'] = $versao;
                $vars['email'] = $email;
                $vars['email_recipiente'] = $email_recipiente;
                $vars['site'] = $site;


                /*                 * ***   MENSAGEM DIRIGIDA AO VISITANTE DO SITE   **** */
                $quebra_linha = "\n";
                $emailsender = $email_recipiente;
                $nomeremetente = 'contato venda';
                $emaildesitnatario = $email;
                $assunto_texto = "Agradecemos o contato";
                $assunto = "=?UTF-8?B?" . base64_encode($assunto_texto) . "?=";

                $mensagemHTML = $this->view_email("emails/contato_agradecimento", $vars);

                $headers = "MIME-Version: 1.1{$quebra_linha}";
                $headers .= "Content-type: text/html; charset=UTF-8{$quebra_linha}";
                $headers .= "From: \"{$nomeremetente}\"<{$emailsender}>{$quebra_linha}";
                $headers .= "Return-Path: {$emailsender}{$quebra_linha}";
                //$headers .= "Cc: {$comcopia}{$quebra_linha}";
                $headers .= "Reply-To: {$emaildesitnatario}{$quebra_linha}";
                $headers .= "X-Mailer: PHP/" . phpversion();

                mail($emaildesitnatario, $assunto, $mensagemHTML, $headers, $alias . $emailsender);

                /*                 * ***   MENSAGEM DIRIGIDA AO ADMINISTRADOR DO SITE   **** */
                $quebra_linha = "\n";
                $emailsender = $email_recipiente;
                $nomeremetente = 'contato venda';
                $emaildesitnatario = $email_recipiente;
                $assunto_texto = "Mensagem formulário venda";
                $assunto = "=?UTF-8?B?" . base64_encode($assunto_texto) . "?=";

                $mensagemHTML = $this->view_email("emails/contato", $vars);

                $headers = "MIME-Version: 1.1{$quebra_linha}";
                $headers .= "Content-type: text/html; charset=UTF-8{$quebra_linha}";
                $headers .= "From: \"{$nomeremetente}\"<{$emailsender}>{$quebra_linha}";
                $headers .= "Return-Path: {$emailsender}{$quebra_linha}";
                //$headers .= "Cc: {$comcopia}{$quebra_linha}";
                $headers .= "Reply-To: {$emaildesitnatario}{$quebra_linha}";
                $headers .= "X-Mailer: PHP/" . phpversion();

                mail($emaildesitnatario, $assunto, $mensagemHTML, $headers, $alias . $emailsender);




                $data['erro'] = "";
                $data['success'] = "<span style='color: #00A9FF; font-weight: bold'>* Mensagem enviada com sucesso!</span>";
                echo json_encode($data);
            }
            die();
        }
    }

    function novidades() {

        $this->get_smarty();


        $model = new Produtos_Model();
        $categoria = "novidades";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);

        if (sizeof($lista_de_produtos_1) > 0) {
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }

        if (sizeof($lista_de_produtos_2) > 0) {
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }

        if (sizeof($lista_de_produtos_3) > 0) {
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }


        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "novidades");
        $this->assign("title", TITLE . "Novidades");

        $this->view_tpl("index");
    }

    function zero_km() {

        $this->get_smarty();

        $model = new Produtos_Model();
        $categoria = "zero_km";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);

        if (sizeof($lista_de_produtos_1) > 0) {
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }

        if (sizeof($lista_de_produtos_2) > 0) {
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }

        if (sizeof($lista_de_produtos_3) > 0) {
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }

        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "zero_km");
        $this->assign("title", TITLE . "Zero KM");
        $this->view_tpl("index");
    }

    function seminovos() {

        $this->get_smarty();

        $model = new Produtos_Model();
        $categoria = "seminovos";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);

        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);

        if (sizeof($lista_de_produtos_1) > 0) {
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }

        if (sizeof($lista_de_produtos_2) > 0) {
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }

        if (sizeof($lista_de_produtos_3) > 0) {
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }

        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "seminovos");
        $this->assign("title", TITLE . "Seminovos");
        $this->view_tpl("seminovos");
    }

    function resultados() {

        /*
         * 
         * CHAMADA NO WEBSERVICE OS FABRICANTES 
         * 
         */
        $fabricantes = $this->convertReturnWS_base64($this->getWsservidor("getList_fabricantes"), "OBJECT");
        $this->assign("fabricantes", $fabricantes);

        $fabricantes_vender = $this->convertReturnWS_base64($this->getWsservidor("getList_fabricantes_vender"), "OBJECT");
        $this->assign("fabricantes_vender", $fabricantes_vender);
        /*
         * 
         * CHAMADA NO WEBSERVICE OS VEICULOS FILTRADOS 
         * 
         */
        $zerokm = $_POST['0km'];
        $seminovos = $_POST['seminovos'];
        $usados = $_POST['usados'];
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $anoinicial = $_POST['anoinicial'];
        $anofinal = $_POST['anofinal'];
        $precoinicial = $_POST['precoinicial'];
        $precofinal = $_POST['precofinal'];

        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
        $dadosXML .= '<REQUISICAO>';
        $dadosXML .= '<CATEGORIA><![CDATA[\'' . $zerokm . '\', \'' . $seminovos . '\', \'' . $usados . '\']]></CATEGORIA>';
        $dadosXML .= '<FABRICANTE><![CDATA[' . $fabricante . ']]></FABRICANTE>';
        $dadosXML .= '<MODELO><![CDATA[' . $modelo . ']]></MODELO>';
        $dadosXML .= '<ANOINICIAL><![CDATA[' . $anoinicial . ']]></ANOINICIAL>';
        $dadosXML .= '<ANOFINAL><![CDATA[' . $anofinal . ']]></ANOFINAL>';
        $dadosXML .= '<PRECOINICIAL><![CDATA[' . $precoinicial . ']]></PRECOINICIAL>';
        $dadosXML .= '<PRECOFINAL><![CDATA[' . $precofinal . ']]></PRECOFINAL>';
        $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
        $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
        $dadosXML .= '<URL_AMIGAVEL><![CDATA[]]></URL_AMIGAVEL>';
        $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';

        $novdds = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos_filtro", base64_encode($dadosXML)), "OBJECT");
        if ($novdds) {

            foreach ($novdds as $objs) {
                ( sizeof($objs) == 1 ) ? $controle1 = TRUE : $controle1 = FALSE;
            }

            $this->assign("controle1", $controle1);
            $this->assign("resultados", $novdds);
        } else {
            $this->assign("resultados", FALSE);
        }

        $this->assign("title", "Resultado da busca");
        $this->view_tpl("resultados");
    }

}
