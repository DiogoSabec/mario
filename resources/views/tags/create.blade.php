<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag | Adicionar</title>
</head>
<body>
    <h1>Adicionar Tag</h1>

    <form action="/tags" method="post">
        @csrf

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name">
        </div>
        
        <button type="submit">Adicionar</button>
    </form>

    <a href="/tags">Voltar</a>
</body>
</html>