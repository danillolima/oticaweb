<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Url;

class ClienteController extends ControllerBase{ 
    public function initialize(){
        $this->view->title = "Clientes - Ótica Ótimo";
        $this->view->urlBase =  $this->getUrl() ; 
        $this->view->setTemplateAfter('common');
        
    }

    public function indexAction(){
        $this->view->setTemplateAfter('common');
    }
    public function cadastroAction(){
        $this->view->urlBase = $this->getUrl();   
        $this->view->setTemplateBefore('common');
        $this->view->setTemplateAfter('cadastro');
        $this->view->title = "Cadastrar Cliente - Ótica Ótimo";
        
    }
    
    public function consultasAction(){
        $this->view->setTemplateBefore('common');
        $this->view->setTemplateAfter('consultas');
    }
    public function encomendasAction(){
        $this->view->setTemplateBefore('common');
        $this->view->setTemplateAfter('encomendas');
    }
    public function inativarAction(){
    }
    public function editarAction(){
        $this->view->setTemplateBefore('common');
        $this->view->setTemplateAfter('editar');
    }
}