<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Usuários</h2>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de publicação</th>
            <th>Editora</th>
        </tr>
        <?php foreach($livros as $id => $u): ?>
            <tr>
                <td><?= $u['TITULO']?></td>
                <td><?= $u['AUTOR']?></td>
                <td><?= $u['ANO']?></td>
                <td><?= $u['EDITORA']?></td>
                <td>
                    <a href="/PB_php/Prova/livro/telaEditar?id=<?= $u ['ID']?>">Editar</a>

                    <a hre="/PB_php/Prova/livro/excluir?id=<? $id ['ID']?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>