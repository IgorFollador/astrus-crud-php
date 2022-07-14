@extends('adminlte::page')

@section('content')
    <h3>Editando Imagem: {{ $imagem->nomeDoArquivo }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['imagens.update', 'id'=>$imagem->id], 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
        
        <div class="form-group">
            {!! Form::label('image', 'Arquivo:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nomeDoArquivo', 'Nome do arquivo:') !!}
            {!! Form::text('nomeDoArquivo', substr($imagem->nomeDoArquivo, 0, -5), ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dsImagem', 'Descrição:') !!}
            {!! Form::text('dsImagem', $imagem->dsImagem, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idProduto', 'Produto:') !!}
            {!! Form::select('idProduto',
                \App\Models\Produto::orderBy('nmProduto')->pluck('nmProduto', 'id')->toArray(),
                $imagem->idProduto, ['class'=>'form-control','required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar Imagem', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop