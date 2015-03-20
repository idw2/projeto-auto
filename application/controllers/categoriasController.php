<?php

Class Categorias extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->getCallWS();
    }

    function index() {
        $this->index_action();
    }

    function index_action() {
        $this->novidades();
    }
    
    public function novidades() {
        
        /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO NOVIDADE 
         * 
         */
        
        
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
            $dadosXML .= '<REQUISICAO>';
                $dadosXML .= '<CATEGORIA><![CDATA[]]></CATEGORIA>';
                $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
                $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
                $dadosXML .= '<URL_AMIGAVEL><![CDATA[]]></URL_AMIGAVEL>';
            $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';
               
        $novdds = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos", base64_encode($dadosXML)), "OBJECT");
        
        if ($novdds) {
            
            foreach( $novdds as $objs ){
                ( sizeof($objs) == 1 ) ? $controle1 = TRUE : $controle1 = FALSE ;
            }
            
            $this->assign("controle1", $controle1);
            $this->assign("novidades", $novdds);  
            
        } else {
            $this->assign("novidades", FALSE);          
        } 
       
        $this->assign("language", LANGUAGE);
        $this->assign("page", "novidades");
        $this->assign("title", TITLE . "Novidades");
        $this->view_tpl("novidades");
    }
    
    public function zero_km() {
        
         /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO ZERO KM 
         * 
         */
        
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
            $dadosXML .= '<REQUISICAO>';
                $dadosXML .= '<CATEGORIA><![CDATA[Zero KM]]></CATEGORIA>';
                $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
                $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
                $dadosXML .= '<URL_AMIGAVEL><![CDATA[]]></URL_AMIGAVEL>';
            $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';
        
        $zeros = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos", base64_encode($dadosXML)), "OBJECT");
        
        if ($zeros) {
            foreach( $zeros as $objs ){
                ( sizeof($objs) == 1 ) ? $controle2 = TRUE : $controle2 = FALSE ;
            }
            
            $this->assign("controle2", $controle2);
            $this->assign("zeros", $zeros);          
        } else {
            $this->assign("zeros", FALSE);          
        }
       
        $this->assign("language", LANGUAGE);
        $this->assign("page", "zero-km");
        $this->assign("title", TITLE . "Zero KM");
        $this->view_tpl("zero_km");
        
    }
    
    public function seminovos() {
        
        /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO SEMINOVOS
         * 
         */
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
            $dadosXML .= '<REQUISICAO>';
                $dadosXML .= '<CATEGORIA><![CDATA[Seminovos]]></CATEGORIA>';
                $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
                $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
                $dadosXML .= '<URL_AMIGAVEL><![CDATA[]]></URL_AMIGAVEL>';
            $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';
        
        $seminovos = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos", base64_encode($dadosXML)), "OBJECT");
        
       
        
        if ($seminovos) {
            foreach( $seminovos as $objs ){
                ( sizeof($objs) == 1 ) ? $controle3 = TRUE : $controle3 = FALSE ;
            }
            
            $this->assign("controle3", $controle3);
            $this->assign("seminovos", $seminovos);          
            
        } else {
            $this->assign("seminovos", FALSE);          
        }
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "seminovos");
        $this->assign("title", TITLE . "Seminovos");
        $this->view_tpl("zero_km");
    }
    
    public function usados() {
        
         /*
         * 
         * CHAMADA NO WEBSERVICE OS ULTIMOS VEICULOS CATEGORIZADOS COMO SEMINOVOS
         * 
         */
        $dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
        $dadosXML .= '<REQUISICOES>';
            $dadosXML .= '<REQUISICAO>';
                $dadosXML .= '<CATEGORIA><![CDATA[Usado]]></CATEGORIA>';
                $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
                $dadosXML .= '<URL><![CDATA[' . SITE . ']]></URL>';
                $dadosXML .= '<URL_AMIGAVEL><![CDATA[]]></URL_AMIGAVEL>';
            $dadosXML .= '</REQUISICAO>';
        $dadosXML .= '</REQUISICOES>';
        
        $usados = $this->convertReturnWS_base64($this->getWsservidor("getList_veiculos", base64_encode($dadosXML)), "OBJECT");
        
        if ($usados) {
            foreach( $usados as $objs ){
                ( sizeof($objs) == 1 ) ? $controle4 = TRUE : $controle4 = FALSE ;
            }
            
            $this->assign("controle4", $controle4);
            $this->assign("usados", $usados);          
            
        } else {
            $this->assign("usados", FALSE);          
        }
        
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "seminovos");
        $this->assign("title", TITLE . "Usados");
        $this->view_tpl("usados");
    }
    
  
}
