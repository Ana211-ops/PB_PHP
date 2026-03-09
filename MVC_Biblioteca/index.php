<?php

require_once "controller/livroController.php";

$livroController = new livroController();
$route = $_GET["route"] ?? '';

switch ($route){
        case "livros/telaCadastro":
            $livroController->telaCadastro();
            break;

       case"livro/salvar":
            $livroController->cadastrar();
            break;

        case "livro/listar":
            $livroController->listarLivros();
            break;

        case "livro/telaEditar":
            $livroController->telaEditar();
            break;

        case"livro/atualizar":
            $livroController->atualizar();
            break;

    default:
        echo "Página não encontrada";
        break;
}