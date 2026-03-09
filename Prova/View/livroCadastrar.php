<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Livros</title>
</head>
<body>
    <a href ="/PB_php/Prova/livro/listar">Ir para tela Listar</a>
    <form method= "POST" action= "salvar">
        <input type="text" name="titulo" placeholder="Título" require>
            <input type="text" name="autor" placeholder="Autor" require>
                <input type="date" name="ano" placeholder="Ano de publicação" require>
                    <input type="text" name="editora" placeholder="Editora" require>
                        <button type= "submit">Enviar</button>
</form>
</body>
</html>