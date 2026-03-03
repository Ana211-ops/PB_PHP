<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UFT-8">
        <title>telaEditar</title>
    </head>
    <body>
        <h2>editar usuario</h2>
        <a href="/PHP_PB/MVC_MySQL/usuario/listar">ir para tela listar</a>
        <form method="POST" action="atualizar? $_GET['id']?>">
            <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
            <input type="text" name="nome" value="<?=htmlspecialchars($_GET['NOME'])?>"require>
            <input type="text" name="email" value="<?=htmlspecialchars($_GET['EMAIL'])?>"require>
            <button type="submit">editar</button>
        </form>
    </body>
</html>


            
