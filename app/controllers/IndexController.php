<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Url;

class IndexController extends ControllerBase
{
    public function initializer(){
        
        parent::initialize();        
    }
    public function indexAction()
    {
        $url = new Url();
        $this->view->urlBase = $this->getUrl(); 
        
    }

    public function loginAction(){
        if ($this->request->isPost()) {
            // Recebe dados da autenticação
            $usuario    = $this->request->getPost('inputUser');
            $password = $this->request->getPost('inputPassword');

            // Valida e procura no banco
            $user = Usuario::findFirst(
                [
                    "usuario = :user: AND senha = :password:",
                    'bind' => [
                        'user'    => $usuario,
                        'password' => sha1($password),
                    ]
                ]
            );

            if ($user !== false) {
                $this->_registerSession($user);

                $this->flash->success(
                    'Bem vindo ' . $user->name
                );

                // Redireciona o usuário para o painel
                return $this->dispatcher->forward(
                    [
                        'controller' => 'painel',
                        'action'     => 'index',
                    ]
                );
            }

            $this->flash->error(
                'Dados inválidos'
            );
        }
/*
        // Forward to the login form again
        return $this->dispatcher->forward(
            [
                'controller' => 'index',
                'action'     => 'index',
            ]
        );
        // Redirect to the local base URI*/
          // Getting a response instance
          $response = new Response();
       return  $response->redirect('http://127.0.0.1:9287/oficinaII/');
    }

    private function _registerSession($user)
    {
        $this->session->set(
            'auth',
            [
                'id'   => $user->id,
                'name' => $user->name,
            ]
        );
    }

}