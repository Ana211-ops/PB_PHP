<?php

require_once "controller/produtoController.php";

$produtoController = new produtoController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'produto/telaCadastro':
       $produtoController->telaCadastro();
       break;

       case"produto/salvar":
            $produtoController->cadastrar();
            break;

        case "produto/listar":
            $produtoController->listarProduto();
            break;

    default:
        echo "Página não encontrada";
        break;
}