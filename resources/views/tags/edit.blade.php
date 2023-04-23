<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag | Editar</title>
</head>
<body>
    <h1>Editar Tag: {{ $tag->name }}</h1>

    <form action="/tags/{{$tag->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" value="{{ $tag->name }}">
        </div>      
        <button type="submit">Salvar</button>
    </form>

    <a href="/tags">Voltar</a>
</body>
</html>