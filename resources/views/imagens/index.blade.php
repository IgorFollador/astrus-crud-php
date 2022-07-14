@extends('layouts.default')

@section('content')
    <h1>Imagens</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome do arquivo</th>
            <th>Descrição</th>
            <th>Produto</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($imagens as $imagem)
                <tr>
                    <td>{{ $imagem->nomeDoArquivo }}</td>
                    <td>{{ $imagem->dsImagem }}</td>
                    <td>{{ isset($imagem->produto->nmProduto) ? $imagem->produto->nmProduto : "Produto não encontrado" }}</td>
                    <td>
                        <a href="{{ route('imagens.edit', ['id'=>$imagem->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{$imagem->id}})" class="btn-sm btn-danger">Remover</a>
                    </td>
                    <br>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $imagens->links("pagination::bootstrap-4") }}

    <a href="{{ route('imagens.create', []) }}" class="btn-sm btn-info">Adicionar</a>
@stop

@section('table-delete')
"imagens"
@endsection