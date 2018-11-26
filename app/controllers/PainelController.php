<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Url;


class PainelController extends ControllerBase
{ 
    public function initialize(){
        $this->view->title = "Painel administrativo - Ótica Ótimo";
        $this->view->setTemplateAfter('common');
        $this->view->urlBase = $this->getUrl(); 
    }

    public function indexAction(){
        
    }
}