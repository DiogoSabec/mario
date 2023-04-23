<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários | Editar</title>
</head>
<body>
    <h1>Editar usuário: {{ $user->name }}</h1>

    <form action="/users/{{$user->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="name">E-mail: </label>
            <input type="text" name="email" id="email" value="{{ $user->email }}">
        </div>        
        <button type="submit">Salvar</button>
    </form>

    <a href="/users">Voltar</a>
</body>
</html>