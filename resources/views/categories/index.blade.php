<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de categorias</h1>
    <a href="/categories/create">Adicionar category</a>

    <ul>
    @foreach ($categories as $category)
        <li> 
            {{ $category->id }} - {{ $category->name }} 
            <a href="/categories/edit/{{ $category->id }}">editar</a>
            <form action="/categories/{{ $category->id }}" method="post">
                @csrf
                @method("delete")
                <button type="submit">Deletar</button>
            </form>
        </li> 
    @endforeach
    </ul>
    <a href="/..">voltar</a>
</body>
</html>