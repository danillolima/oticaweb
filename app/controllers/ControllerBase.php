<?php
use Phalcon\Mvc\Controller;
class ControllerBase extends Controller{
    private $url = '/oficinaII/';
    public function getUrl(){
        return $this->url;
    }
}