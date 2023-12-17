<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Produtos</title>
    <style>
    </style>
</head>
<body class="container">
    <a class="btn btn-success mt-4" href="{{ route('produto.create') }}">Crie um Produto</a>
    
    <h2 class="mt-3 mb-3 text-center">Lista de Produtos</h2>    
    
    @if (session("success"))
        <p class="alert alert-success">
            {{ session("success") }} <br>
        </p>
    @endif

    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
           @forelse($item as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td> <img src='{{ url("{$produto->imagem}") }}' alt="" width="150"> </td>
                    <td class="acoes">
                        <a style="margin-right: 5px;" class="btn btn-primary" href="{{ route('produto.show', ['produto' => $produto->id]) }}"> <i class="fa-solid fa-eye"></i> </a>
                        <a style="margin-right: 5px;" class="btn btn-warning" href="{{ route('produto.edit', ['produto' => $produto->id]) }}"> <i class="fa-solid fa-pen-to-square"></i> </a>
                        <form action="{{ route('produto.destroy', ['produto' => $produto->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar esse produto ?')"> <i class="fa-solid fa-trash"></i> </button>
                        </form>
                    </td>
                </tr>

                @empty
                
                    <p class="h4 text-center mt-5" style="color: #F00;">Nenhuma conta encontrada!</p>

            @endforelse
        </tbody>
    </table>
</body>
</html>