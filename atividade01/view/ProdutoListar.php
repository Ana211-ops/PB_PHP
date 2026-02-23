<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>produto</h2>
    <a href="/PHP_PB/atividade01/produto/listar">ir para tela cadastrar</a>
    <table border="1">
        <tr>
            <th>categoria</th>
            <th>disponivel</th>
            <th>açoes</th>
        </tr>
        <?php foreach($produtos as $u): ?>
            <tr>
                <td><?= $u['categoria']?></td>
                <td><?= $u['disponivel']?></td>
                <td><?= $u['validade']?></td>
                <td><?= $u['preço']?></td>
                <td><?= $u['quantidade']?></td>
                <td><?= $u['nome']?></td>
                <td>proxima aula</td>
            </tr> 
            <?php endforeach; ?>
    </table>
</body>
</html>