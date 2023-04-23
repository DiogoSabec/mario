<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias | Editar</title>
</head>
<body>
    <h1>Editar Categorias: {{ $category->name }}</h1>

    <form action="/categories/{{$category->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">
        </div> 
        <div>
            <label for="name">Descrição: </label>
            <input type="text" name="description" id="description" value="{{ $category->description }}">
        </div>  
        <button type="submit">Salvar</button>
    </form>

    <a href="/categories">Voltar</a>
</body>
</html>