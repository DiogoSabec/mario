<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários | Adicionar</title>
</head>
<body>
    <h1>Adicionar usuário</h1>

    <form action="/users" method="post">
        @csrf

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="name">E-mail: </label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="name">Password: </label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Adicionar</button>
    </form>

    <a href="/users">Voltar</a>
</body>
</html>