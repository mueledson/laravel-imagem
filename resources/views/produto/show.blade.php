<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Show</title>
</head>
<body class="container">

    <a class="btn btn-primary mt-2" href="{{ route('produto.index') }}">Listar Todas Contas</a>

    <h2 class="mt-2 mb-1">Projeto de Produtos</h2>

    <p> <strong>Produto:</strong> {{ $produto->nome }} </p>
    <p> <strong>Descrição:</strong> {{ $produto->descricao }} </p>
    <!-- <p> {{ $produto->imagem }} </p> -->

    <p><strong>Imagem:</strong></p>

    <img src='{{ url("{$produto->imagem}") }}' style="border-radius: 15px;" alt="">
    
    <!-- <img src="{{ url('storage/$produto->imagem') }}" alt="" /> -->
    
    <!-- <img src="https://kinsta.com/wp-content/uploads/2023/02/Untitled-21.png" alt="" width="400" /> -->
</body>
</html>