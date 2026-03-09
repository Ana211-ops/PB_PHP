<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UFT-8">
        <title>telaEditar</title>
    </head>
    <body>
        <h2>editar Livro</h2>
        <a href="/PHP_PB/MVC_Biblioteca/livro/listar">ir para tela listar</a>
        <form method="POST" action="atualizar? $_GET['id']?>">
            <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
            <input type="text" name="titúlo" value="<?=htmlspecialchars($_GET['TITÚLO'])?>"require>
            <input type="text" name="autor" value="<?=htmlspecialchars($_GET['AUTOR'])?>"require>
            <input type="text" name="ano_publicação" value="<?=htmlspecialchars($_GET['ANO_PUBLICAÇÃO'])?>"require>
            <input type="text" name="editora" value="<?=htmlspecialchars($_GET['EDITORA'])?>"require>
            <button type="submit">editar</button>
        </form>
    </body>
</html>


            
