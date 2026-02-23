<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UFT-8">
        <title>formulario cadastro</title>
    </head>
    <body>
        <a href="/PHP_PB/atividade01/produto/listar">ir para tela listar</a>
        <form method="POST" action="salvar">
            <input type="text" categoria="categoria" placeholder="sua categoria" require>
            <input type="text" disponivel="disponivel" placeholder="sua disponibilidade" require>
            <input type="text" data_de_validade=" data_de_validade" placeholder="sua data_de_validade" require>
            <input type="text" preço="preço" placeholder="seu preço" require>
            <input type="text" quantidade="quantidade" placeholder="sua quantidade" require>
            <input type="text" nome="nome" placeholder="seu nome" require>

            <button type="submit">enviar</button>
        </form>
    </body>
</html>
