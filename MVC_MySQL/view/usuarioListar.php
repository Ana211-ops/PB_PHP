<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>usuarios</h2>
    <a href="/PHP_PB/MVC_MySQL/usuario/listar">ir para tela cadastrar</a>
    <table border="1">
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>açoes</th>
        </tr>
        <?php foreach($usuarios as $id => $u): ?>
            <tr>
                <td><?= $u['NOME']?></td>
                <td><?= $u['EMAIL']?></td>
                <td>
                    <a href="/PB_PHP/MVC_MySQL/usuario/telaEditar?id=<?= $u['ID'] ?>">
                        telaEditar
                </a>
                
                </td>
            </tr> 
            <?php endforeach; ?>
    </table>
</body>
</html>