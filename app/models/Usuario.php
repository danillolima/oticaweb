<?php

use Phalcon\Mvc\Model;

/**
 * Usuários
 */
class Usuario extends Model
{
    protected $id;      
    protected $nome;    
    protected $cargo;    
    protected $usuario;
    protected $endereco; 
    protected $telefone; 
    protected $email;   
    protected $senha;

}