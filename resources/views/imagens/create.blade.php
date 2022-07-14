@extends('adminlte::page')

@section('content')
    <h3>Nova Imagem</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'imagens.store']) !!}

        <div class="form-group">
            {!! Form::label('imageFile', 'Arquivo:') !!}
            {!! Form::file('imageFile', null, ['class'=>'form-control', 'required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('nomeDoArquivo', 'Nome do arquivo:') !!}
            {!! Form::text('nomeDoArquivo', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dsImagem', 'Descrição:') !!}
            {!! Form::text('dsImagem', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idProduto', 'Produto:') !!}
            {!! Form::select('idProduto',
                \App\Models\Produto::orderBy('nmProduto')->pluck('nmProduto', 'id')->toArray(),
                null, ['class'=>'form-control','required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Criar Imagem', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop