<?php

session_start();
require_once "./model/ProdutoModel.php";


class ProdutoController{

    public function telaCadastro(){
        echo"<pre>";
        print_r($_SESSION);
        echo"</pre>";
        require "view/produtoCadastrar.php";
    }

    public function cadastrar(){
        $categoria = $_POST['categoria'];
        $disponivel = $_POST['disponivel'];

        $produto = new usuario($categoria, $disponivel);
        $produto->salvar();
        header('location: /PHP_PBE_2IDS_2025/atividade01/usuario/telaCadastro');
        exit;
    }
    public function listarProdutos(){
        $produto = listarProduto::listar();
        echo"</pre>";
        print_r($produto);
        echo"</pre>";
        require "view/produtoCadastrar.php";

    }
}

