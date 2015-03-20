<?php

Class Informacoes extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->getCallWS();
    }

    function index() {
        return false;
    }

    function index_action() {

        $this->contato();
    }

    function empresa() {

        $this->assign("language", LANGUAGE);
        $this->assign("page", "empresa");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Empresa");
        $this->view_tpl("empresa");
    }

    function zero_km() {

        $model = new HTML_Model();
        $pagina = "zero_km";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "zero_km");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Zero KM");
        $this->view_tpl("zero_km");
    }

    function seminovos() {

        $model = new HTML_Model();
        $pagina = "seminovos";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "seminovos");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Seminovos");
        $this->view_tpl("seminovos");
    }

    function financiamento() {

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "financiamento");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Financiamento");
        $this->view_tpl("financiamento");
    }

    function vender_carro() {

        $model = new HTML_Model();
        $pagina = "vender_carro";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "vender_carro");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Venda seu carro");
        $this->view_tpl("vender_carro");
    }

    function contato() {

        if ($_POST) {

            header('Content-Type: application/json');

            $nome = ($_POST["nome"] == "Nome completo" || $_POST["nome"] == "") ? "" : addslashes(trim($_POST["nome"]));
            $email = ($_POST["email"] == "E-mail" || $_POST["email"] == "") ? "" : addslashes(trim($_POST["email"]));
            $email_recipiente = $_POST["email_recipiente"];
            $alias = $_POST["alias"];
            $assunto = ($_POST["assunto"] == "Assunto" || $_POST["assunto"] == "") ? "" : addslashes(trim($_POST["assunto"]));
            $mensagem = stripslashes($_POST["mensagem"]);
            $site = $_POST["site"];

            if ($nome == "" || substr_count($nome, " ") < 1) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Por favor, informe seu nome completo!</span>";
                echo json_encode($data);
            } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* E-mail inválido!</span>";
                echo json_encode($data);
            } else if ($assunto == "") {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Assunto requerido!</span>";
                echo json_encode($data);
            } else if ($mensagem == "" || substr_count($mensagem, " ") < 5) {
                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Por favor, formular sua mensagem!</span>";
                echo json_encode($data);
            } else {

                $vars['nome'] = $nome;
                $vars['email'] = $email;
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

                /*****   MENSAGEM DIRIGIDA AO VISITANTE DO SITE   *****/
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
                
                /*****   MENSAGEM DIRIGIDA AO ADMINISTRADOR DO SITE   *****/
                $quebra_linha = "\n";
                $emailsender = $email_recipiente;
                $nomeremetente = $getConta->NOME_RAZAO_SOCIAL;
                $emaildesitnatario = $email_recipiente;
                $assunto_texto = $getConta->NOME_RAZAO_SOCIAL . " - Mensagem Fale conosco";
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

        $this->assign("language", LANGUAGE);
        $this->assign("page", "contato");
        $this->assign("site", SITE);
        $this->assign("title", TITLE . "Fale conosco");
        $this->view_tpl("contato");
    }

    function onde_estamos() {

        $this->assign("language", LANGUAGE);
        $this->assign("page", "onde_estamos");
        $this->assign("title", TITLE . "Onde Estamos");
        $this->view_tpl("onde_estamos");
    }

}
