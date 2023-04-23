<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags</title>
</head>

<body>
    <h1>Lista de Tags</h1>
    <a href="/tags/create">Adicionar Tag</a>

    <ul>
        @foreach ($tags as $tag)
            <li>
                {{ $tag->id }} - {{ $tag->name }}
                <a href="/tags/edit/{{ $tag->id }}">editar</a>
                <form action="/tags/{{ $tag->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="/..">voltar</a>
</body>

</html>
