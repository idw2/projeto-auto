<?php

class Controller extends My_smarty {

    private $_params;
    private $_url;

    public function __construct() {
        $this->_params = $this->array_url();
    }

    protected function view($nome, $vars = null) {
        if (is_array($vars) && count($vars) > 0) {
            extract($vars, EXTR_PREFIX_ALL, "view");
            return require_once( VIEWS . $nome . ".phtml");
            exit();
        }
    }

    protected function view_email($nome, $vars = null) {

        if (is_array($vars) && count($vars) > 0) {
            foreach ($vars as $key => $value) {
                $this->assign("view_" . $key, $value);
            }
            ob_start();
            $this->view_tpl($nome);
            $html = ob_get_clean();
            return $html;
            exit();
        }
    }

    private function setURL() {
        $_GET["url"] = (isset($_GET["url"])) ? $_GET["url"] . "/" : "index/index_action";
        $this->_url = $_GET["url"];
    }

    public function array_url() {
        $separator = explode("/", $_GET["url"]);
        unset($separator[0], $separator[1], $separator[2]);
        if (sizeof($separator) != 0) {
            foreach ($separator as $name => $value) {
                if ($value != "") {
                    $arr[] = $value;
                }
            }
            return $arr;
        } else {
            return false;
        }
    }

    private function setParameters() {

        $separator = explode("/", $this->_url);
        unset($separator[0], $separator[1], $separator[2]);

        if (sizeof($separator) % 2 == 1) {
            array_pop($separator);
        }

        $count = 0;
        if (!empty($separator)) {
            foreach ($separator as $val) {
                ( $count % 2 == 0) ? $inds[] = $val : $values[] = $val;

                $count++;
            }
        } else {
            $inds = array();
            $values = array();
        }

        if ((count($inds) == count($values)) && (!empty($inds) && !empty($values))) {
            $this->_params = array_combine($inds, $values);
        } else {
            $this->_params = array();
        }
    }

    public function getParameters($name = null) {
        if ($name == null) {
            return $this->_params;
        } else {
            return $this->_params[$name];
        }
    }

    public function run() {

        $this->setURL();
        $this->setParameters();
    }

    public function getEndereco($cep) {
        include('phpQuery-onefile.php');
        $cep = str_replace("-", "", $cep);
        define('POSTURL', 'http://m.correios.com.br/movel/buscaCepConfirma.do');
        define('POSTVARS', 'cepEntrada=' . $cep . '&metodo=buscarCep');  // POST VARIABLES TO BE SENT

        $ch = curl_init(POSTURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, POSTVARS);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);  // DO NOT RETURN HTTP HEADERS
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // RETURN THE CONTENTS OF THE CALL
        $html = curl_exec($ch);

        phpQuery::newDocumentHTML($html, $charset = 'utf-8');

        $dados = array(
            'Logradouro' => trim(pq('.caixacampobranco .resposta:contains("Logradouro: ") + .respostadestaque:eq(0)')->html()),
            'Bairro' => trim(pq('.caixacampobranco .resposta:contains("Bairro: ") + .respostadestaque:eq(0)')->html()),
            'Cidade/uf' => trim(pq('.caixacampobranco .resposta:contains("Localidade / UF: ") + .respostadestaque:eq(0)')->html()),
            'Cep' => trim(pq('.caixacampobranco .resposta:contains("CEP: ") + .respostadestaque:eq(0)')->html())
        );

        $dados['Cidade/uf'] = explode('/', $dados['Cidade/uf']);
        $dados['Cidade'] = trim($dados['Cidade/uf'][0]);
        $dados['UF'] = trim($dados['Cidade/uf'][1]);
        unset($dados['Cidade/uf']);

        $dados["Logradouro"] = htmlentities(utf8_decode($dados["Logradouro"]));
        $dados["Bairro"] = htmlentities(utf8_decode($dados["Bairro"]));
        $dados["Cep"] = htmlentities(utf8_decode($dados["Cep"]));
        $dados["Cidade"] = htmlentities(utf8_decode($dados["Cidade"]));
        $dados["UF"] = htmlentities(utf8_decode($dados["UF"]));

        curl_close($ch);
        return $dados;
    }

    public function getPrimarykey() {
        return strtoupper(md5(uniqid(rand(), true)));
    }

    public function senhaMd5($senha) {
        return strtoupper(md5($senha));
    }

    public function url_amigavel($name) {

        $name = strtolower(trim($name));
//        $name = str_replace(".", " ", $name);
//        $name = str_replace(",", " ", $name);
//        $name = str_replace(";", " ", $name);
//        $name = str_replace("@", " ", $name);
//        $name = str_replace("!", " ", $name);
//        $name = str_replace("?", " ", $name);
        $name = str_replace("/", " ", $name);
        $name = str_replace("'", " ", $name);
        $name = str_replace('"', " ", $name);
        $name = str_replace("-", " ", $name);
        $name = str_replace(";", " ", $name);
        $name = str_replace(",", " ", $name);
        $name = str_replace("á", "a", $name);
        $name = str_replace("ã", "a", $name);
        $name = str_replace("â", "a", $name);
        $name = str_replace("à", "a", $name);
        $name = str_replace("é", "e", $name);
        $name = str_replace("ê", "e", $name);
        $name = str_replace("í", "i", $name);
        $name = str_replace("ó", "o", $name);
        $name = str_replace("õ", "o", $name);
        $name = str_replace("ô", "o", $name);
        $name = str_replace("ú", "u", $name);
        $name = str_replace("ç", "c", $name);
        $name = preg_replace("/\s{2,}/", " ", $name);
        $name = preg_replace("/[\[\]\^\$\.\|\?\*\+\(\)\\\~\`\!@#%&\-\_\+\=\{\}\'\"\"\<\>\:\;\, ]{1,}/", " ", $name);
        $name = str_replace(" ", "-", $name);
        return $name;
    }

    public function iniciais($nome) {
        $nome = str_replace("-", "", $nome);
        $nome = str_replace("/", "", $nome);
        $nome = preg_replace("/\s{2,}/", " ", $nome);
        $n = explode(" ", $nome);
        $iniciais = "";

        foreach ($n as $in => $value) {
            if ($value != "") {
                $vl = mb_strtoupper($value, "UTF-8");
                if (mb_strlen($vl, "UTF-8") > 2) {
                    $iniciais .= $vl{0};
                }
            }
        }

        return preg_replace('/([A-Za-z])\1/', '\1', $iniciais);
    }

    public function trata_nome($nome) {
        $n = explode(" ", $nome);
        $newname = "";

        foreach ($n as $in => $value) {

            if (mb_strlen($value, "UTF-8") <= 2) {
                $newname .= mb_strtolower($value, "UTF-8") . " ";
            } else {
                $vl = mb_strtoupper($value{0}, "UTF-8");
                $vl2 = mb_strtolower(substr($value, 1), "UTF-8");
                $newname .= $vl . $vl2 . " ";
            }
        }

        $newname = str_replace("S/a", "S/A", $newname);
        $newname = str_replace("s/A", "S/A", $newname);
        $newname = str_replace("s/a", "S/A", $newname);
        $newname = str_replace("S/A", "S/A", $newname);
        $newname = str_replace("S.A", "S/A", $newname);
        $newname = str_replace("s.A", "S/A", $newname);
        $newname = str_replace("S.a", "S/A", $newname);
        $newname = str_replace("s.a", "S/A", $newname);

        return trim($newname);
    }

    public function permitir_acesso($email, $senha) {
        $model = new Conta_Model();
        if ($model->confere_senha($email, $senha)) {
            return true;
        } else {
            echo "<script>window.location='/403.php'</script>";
            exit();
        }
    }

    public function formataReais($valorReal) {
        $size = strlen($valorReal);
        $result = null;
        if ($size >= 9) {
            //9.999.999,99                                                                         
            if ($size == 9) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -9, 1);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 10) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -10, 2);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 11) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -11, 3);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            }
            return $result;
        } elseif ($size == 8) {
            //999.999,99                                                                           
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -8, 3);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 7) {
            //99.999,99                                                                            
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -7, 2);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 6) {
            //9.999,99                                                                             
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -6, 1);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 5) {
            //999,99                                                                               
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 4) {
            //99,99                                                                                
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -4, 2);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 3) {
            //9,99                                                                                 
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -3, 1);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 2) {
            //0,99                                                                                 
            $p1 = substr($valorReal, -2);
            $result = "0," . $p1;
            return $result;
        }

        return false;
    }

    public function getWsservidor($metodo, $parametros = null) {
        $wsdl = 'http://motors.designlab.com.br/wsservidor/WebServiceMotors.php?wsdl';
        $client = new nusoap_client($wsdl, 'wsdl');

        if ($client->getError()) {
            print "<h2>Soap Constructor Error:</h2><pre>" .
                    $client->getError() . "</pre>";
        }

        $metodo = "Motors__" . $metodo;

        $proxy = $client->getProxy();

        if ($parametros != NULL) {
            $result = $proxy->$metodo($parametros);
        } else {
            $result = $proxy->$metodo();
        }

        if ($client->fault) {
            print "<h2>Soap Fault: </h2><pre>(" . $client->fault->faultcode . ")  " . $client->fault->faultstring . "</pre>";
            die();
        } elseif ($client->getError()) {
            print "<h2>Soap Error: </h2><pre>" . $client->getError() . "</pre>";
            die();
        } else {
            return $result;
        }

        # Debug métodos existentes webservice
        /*
          $class_methods = get_class_methods($proxy);
          foreach ($class_methods as $method_name) {
          echo "$method_name <br>";
          }
         */
    }

    public function convertReturnWS_base64($resultXMLWS, $typeReturn) {

        if ($typeReturn != "STRING") {

            $xml = base64_decode($resultXMLWS);

            $string = <<<XML
$xml  
XML;
        }

        if ($typeReturn == "XML") {
            return simplexml_load_string($string);
        } else if ($typeReturn == "ARRAY") {
            return $this->xmlstr_to_array($string);
        } else if ($typeReturn == "STRING") {
            return $resultXMLWS;
        } else if ($typeReturn == "OBJECT") {
            $arr = $this->xmlstr_to_array($string);

            $obj = (object) $obj;

            if (is_array($arr)) {
                if (sizeof($arr) > 0) {
                    foreach ($arr as $array) {
                        if (is_array($array)) {
                            foreach ($array as $name => $value) {
                                $obj->$name = $value;
                            }
                        }
                    }
                    return $obj;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function xmlstr_to_array($xmlstr) {
        $doc = new DOMDocument();
        $doc->loadXML($xmlstr);
        return $this->domnode_to_array($doc->documentElement);
    }

    public function domnode_to_array($node) {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->domnode_to_array($child);
                    if (isset($child->tagName)) {
                        $t = $child->tagName;
                        if (!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v) {
                        $output = (string) $v;
                    }
                }
                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }
        return $output;
    }

    public function getCallWS() {

        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA OS DADOS DA CONTA 
         * 
         */
        $getConta = $this->convertReturnWS_base64($this->getWsservidor("getConta", SITE), "OBJECT");
        if ($getConta) {
            $this->assign("conta", $getConta);
        }
        /*
         * 
         * SETA A LINGUAGEM PADRAO DO BROWSER DO USUARIO
         * 
         */
        $this->assign("language", LANGUAGE);
        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA OS DADOS DE ENDERECO DA CONTA 
         * 
         */
        $getEndereco = $this->convertReturnWS_base64($this->getWsservidor("getEndereco", SITE), "OBJECT");
        if ($getEndereco) {
            $this->assign("endereco", $getEndereco);
        }
        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA OS DADOS DE CONFIGURACAO DA CONTA 
         * 
         */
        $getConfiguracao = $this->convertReturnWS_base64($this->getWsservidor("getConfiguracao", SITE), "OBJECT");
        if ($getConfiguracao) {
            $this->assign("configuracao", $getConfiguracao);
        }
        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA OS TELEFONES DA CONTA 
         * 
         */
        $getTelefones = $this->convertReturnWS_base64($this->getWsservidor("getTelefones", SITE), "OBJECT");
        if ($getTelefones) {
            $this->assign("telefones", $getTelefones);
        }
        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA O LINK DO GOOGLE MAPS DE LOCALIZACAO DA CONTA 
         * 
         */
        $getOnde_estamos = $this->convertReturnWS_base64($this->getWsservidor("getOnde_estamos", SITE), "STRING");
        if ($getOnde_estamos) {
            $this->assign("onde_estamos", $getOnde_estamos);
        }
        /*
         * 
         * CHAMADA NO WEBSERVICE QUE PEGA O LINK DO GOOGLE MAPS DE LOCALIZACAO DA CONTA 
         * 
         */
        $getInstitucional = $this->convertReturnWS_base64($this->getWsservidor("getInstitucional", SITE), "STRING");
        if ($getInstitucional) {
            $this->assign("institucional", $getInstitucional);
        }
    }

}
