<?php

session_start();
require_once "./model/livroModel.php";


class livroController{

    public function telaCadastro(){
        echo"<pre>";
        print_r($_SESSION);
        echo"</pre>";
        require "view/livroCadastrar.php";
    }

    public function cadastrar(){
        $id = $_POST['id'];
        $titúlo = $_POST['titúlo'];
        $autor = $_POST['autor'];
        $ano_publicação = $_POST['ano_publicação'];
        $editora = $_POST['editora'];

        $livro = new livro($id, $titúlo, $autor, $ano_publicação, $editora);
        $livro->salvar();
        header('location: /PB_PHP/MVC_Biblioteca/livro/telaCadastro');
        exit;
    }
    public function listarLivro(){
        $livro = Livro::listar();
        echo"</pre>";
        print_r($livro);
        echo"</pre>";
        require "view/LivroCadastrar.php";

    }


    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'view/livroEditar.php';
    }

    public function atualizar(){
        $livros = new livros($_POST['id'], $_POST['titúlo'], $_POST['autor'], $_POST['ano_publicação'], $_POST['editora']);
        $livros->atualizar ($_GET['id']);
        header('location: /PB_PHP/MVC_Biblioteca/livro/telaEditar?id='.($_GET['id']));
        exit;

    }
}
