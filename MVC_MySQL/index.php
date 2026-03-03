<?php

require_once "controller/usuarioController.php";

$usuarioController = new usuarioController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'usuario/telaCadastro':
       $usuarioController->telaCadastro();
       break;

       case"usuario/salvar":
            $usuarioController->cadastrar();
            break;

        case "usuario/listar":
            $usuarioController->listarUsuarios();
            break;

        case "usuario/telaEditar":
            $usuarioController->telaEditar();
            break;

        case"usuario/atualizar":
            $usuarioController->atualizar();
            break;

    default:
        echo "Página não encontrada";
        break;
}