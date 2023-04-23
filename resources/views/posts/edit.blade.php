<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts | Editar</title>
</head>
<body>
    <h1>Editar Posts: {{ $post->name }}</h1>

    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="name">Titulo: </label>
            <input type="text" name="title" id="title">
        </div>
        <label for="name">Usuário</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    
        <label for="name">Categoria</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>

    <a href="/posts">Voltar</a>
</body>
</html>