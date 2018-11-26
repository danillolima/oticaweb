<?php

use Phalcon\Mvc\Controller;

class UsuarioController extends ControllerBase
{ 
    public function initialize(){
        $this->view->title = "Usuários - Ótica Ótimo";
        $this->view->urlBase = $this->getUrl(); 
        $this->view->setTemplateAfter('common');
    }

    public function indexAction(){
        
    }
    public function cadastroAction(){
        $this->view->title = "Cadastrar Usuários - Ótica Ótimo";
    }
}