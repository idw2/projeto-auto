<?php

Class Error extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->getCallWS();
    }

    function index() {
        $this->index_action();
    }

    function index_action() {
        $this->error_inexperado();
    }
    
    public function error_inexperado() {
        $this->assign("language", LANGUAGE);
        $this->assign("title", "Página Inicial");
        $this->view_tpl("error_inexperado");
    }
    
    public function error_404() {
        $this->assign("language", LANGUAGE);
        $this->assign("title", "Página Inicial");
        $this->view_tpl("error_404");
    }
    
    public function error_403() {
        $this->assign("language", LANGUAGE);
        $this->assign("title", "Página Inicial");
        $this->view_tpl("error_403");
    }

}
