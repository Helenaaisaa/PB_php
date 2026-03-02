<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h2>Produtos</h2>
    <table border="1">
        <tr>
            <th>Produtos</th>
            <th>Valor</th>
            <th>Quantidade Disponível</th>
            <th>Validade</th>

        </tr>
        <?php foreach($Produto as $id => $u): ?>
            <tr>
                <td><?= $u['Produto']?></td>
                <td><?= $u['Valor']?></td>
                <td><?= $u['Quantidade']?></td>
                <td><?= $u['Validade']?></td>
                <td>
                    <a href="/PB_php/Exercício_1/produto/telaEditar?id=<?= $id ?>">Editar</a>

                    <a href="/PB_php/Exercício_1/produto/excluir?id=<?= $id ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>