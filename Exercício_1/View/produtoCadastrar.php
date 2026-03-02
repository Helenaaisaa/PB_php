<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_php/Exercício_1/produto/listar">Ir para a tela listar</a>
    <form
        method= "POST" action= "salvar">
        <input type="text" name="Produto" placeholder="Seu produto" require>
            <input type="number" name="Valor" placeholder="Valor" require>
            <input type="number" name="Quantidade" placeholder="Quantidade Disponível" require>
            <input type="date" name="Validade" placeholder="Validade" require>
            <button type ="submit">Enviar</button>
</form>
</body>
</html>