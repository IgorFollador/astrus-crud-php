@extends('layouts.default')

@section('content')
    <h1>Produtos</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nmProduto }}</td>
                    <td>{{ $produto->dsProduto }}</td>
                    <td>{{ isset($produto->categoria->dsCategoria) ? $produto->categoria->dsCategoria : "Categoria não informada" }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', ['id'=>$produto->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$produto->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $produtos->links("pagination::bootstrap-4") }}

    <a href="{{ route('produtos.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"produtos"
@endsection