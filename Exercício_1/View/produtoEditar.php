<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar produto</h2>
    <a href="/PB_php/Exercício_1/produto/listar">Ir para a tela listar</a>
    <form method= "POST" action= "atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="Produto" value="<?=htmlspecialchars($Produto['Produto'])?>" require>
        <input type="text" name="Valor" value="<?=htmlspecialchars($Produto['Valor'])?>" require>]
        <input type="text" name="Quantidade" value="<?=htmlspecialchars($Produto['Quantidade'])?>" require>
        <input type="text" name="Validade" value="<?=htmlspecialchars($Produto['Validade'])?>" require>
        <button type ="submit">Editar</button>
</form>
</body>
</html>