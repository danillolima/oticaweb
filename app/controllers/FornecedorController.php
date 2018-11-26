<?php

use Phalcon\Mvc\Controller;

class FornecedorController extends ControllerBase
{ 
    public function initialize(){
        $this->view->title = "Fornecedores - Ótica Ótimo";
        $this->view->urlBase = $this->getUrl(); 
        $this->view->setTemplateAfter('common');
    }

    public function indexAction(){
        
    }
    public function cadastroAction(){
        $this->view->title = "Cadastrar Fornecedores - Ótica Ótimo";
    }
}