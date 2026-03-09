<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Livro</h2>
    <a href="/PHP_PB/MVC_Biblioteca/livro/listar">ir para tela cadastrar</a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>titúlo</th>
            <th>autor</th>
            <th>ano_publicação</th>
            <th>editora</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?= $u['ID']?></td>
                <td><?= $u['TITÚLO']?></td>
                <td><?= $u['AUTOR']?></td>
                <td><?= $u['ANO_PUBLICAÇÃO']?></td>
                <td><?= $u['EDITORA']?></td>
                <td>
                    <a href="/PB_PHP/MVC_Biblioteca/livro/telaEditar?id=<?= $u['ID'] ?>">
                        telaEditar
                </a>
                
                </td>
            </tr> 
            <?php endforeach; ?>
    </table>
</body>
</html>