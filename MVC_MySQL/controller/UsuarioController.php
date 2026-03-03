<?php

session_start();
require_once "./model/usuarioModel.php";


class usuarioController{

    public function telaCadastro(){
        echo"<pre>";
        print_r($_SESSION);
        echo"</pre>";
        require "view/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new usuario($nome, $email);
        $usuario->salvar();
        header('location: /PB_PHP/MVC_MySQL/usuario/telaCadastro');
        exit;
    }
    public function listarUsuarios(){
        $usuario = Usuario::listar();
        echo"</pre>";
        print_r($usuarios);
        echo"</pre>";
        require "view/usuarioCadastrar.php";

    }


    public function telaEditar(){
        $usuario = Usuario::buscar($_GET['id']);
        require 'view/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST['email']);
        $usuario->atualizar ($_GET['id']);
        header('location: /PB_PHP/MVC_MySQL/usuario/telaEditar?id='.($_GET['id']));
        exit;

    }
}
