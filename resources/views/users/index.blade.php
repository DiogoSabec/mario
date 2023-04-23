    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <h1>Lista de usuários</h1>
    <a href="/users/create">Adicionar usuário</a>

    <ul>
    @foreach ($users as $user)
        <li> 
            {{ $user->id }} - {{ $user->name }} 
            <a href="/users/edit/{{ $user->id }}">editar</a>
            <form action="/users/{{ $user->id }}" method="post">
                @csrf
                @method("delete")
                <button type="submit">Deletar</button>
            </form>
        </li> 
    @endforeach
    </ul>
</body>
</html>