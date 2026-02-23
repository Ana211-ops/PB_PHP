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
        header('location: /PHP_PBE_2IDS_2025/MVC_exemplo/usuario/telaCadastro');
        exit;
    }
    public function listarUsuarios(){
        $usuario = Usuario::listar();
        echo"</pre>";
        print_r($usuarios);
        echo"</pre>";
        require "view/usuarioCadastrar.php";

    }
}
