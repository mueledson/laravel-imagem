<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Update</title>
</head>
<body class="container">
    <a class="btn btn-primary mt-4 mb-4" href="{{ route('produto.index') }}">Listar Todas Contas</a>
    
    <h2 class="mb-4">Edite um Produto</h2>

    <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nome">Produto</label>
        <input class="form-control mb-3" type="text" name="nome" id="nome" value="{{ old('nome', $produto->nome) }}" placeholder="Coloque o Nome do Produto">

        <label for="descricao">Descrição</label>
        <input class="form-control mb-3" type="text" name="descricao" id="descricao" value="{{ old('descricao', $produto->descricao) }}" placeholder="Coloque uma descricação do Produto">
        
        <label>Imagem</label>
        <input class="form-control mb-3" type="text" name="imagem" id="imagem" value="{{$produto->imagem}}">

        <input type="submit" class="btn btn-warning" value="Editar">
    </form>

</body>
</html>