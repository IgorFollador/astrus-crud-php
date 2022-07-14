@extends('layouts.default')

@section('content')
    <h1>Imagens</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Imagem</th>
            <th>Nome do arquivo</th>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>

        <tbody>
            @foreach($imagens as $imagem)
                <tr>
                    <td><img src="{{ url('Images/'.$imagem->nomeDoArquivo) }}" style="height: 100px; width: 150px;"></td>
                    <td>{{ $imagem->nomeDoArquivo }}</td>
                    <td>{{ $imagem->dsImagem }}</td>
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