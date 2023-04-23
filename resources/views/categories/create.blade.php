<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria | Adicionar</title>
</head>
<body>
    <h1>Adicionar Categoria</h1>

    <form action="/categories" method="post">
        @csrf

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="name">Descrição: </label>
            <input type="text" name="description" id="description">
        </div>  
        <button type="submit">Adicionar</button>
    </form>

    <a href="/categories">Voltar</a>
</body>
</html>