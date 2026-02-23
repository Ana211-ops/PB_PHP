<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>usuarios</h2>
    <a href="/PHP_PB/MVC_exemplo/usuario/listar">ir para tela cadastrar</a>
    <table border="1">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>açoes</th>
        </tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>proxima aula</td>
            </tr> 
            <?php endforeach; ?>
    </table>
</body>
</html>