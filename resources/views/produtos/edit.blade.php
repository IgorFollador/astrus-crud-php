@extends('adminlte::page')

@section('content')
    <h3>Editando Produto: {{ $produto->nmProduto }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['produtos.update', 'id'=>$produto->id], 'method'=>'put']) !!}
        
        <div class="form-group">
            {!! Form::label('nmProduto', 'Nome:') !!}
            {!! Form::text('nmProduto', $produto->nmProduto, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('dsProduto', 'Nome:') !!}
            {!! Form::text('dsProduto', $produto->dsProduto, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('idCategoria', 'Categoria:') !!}
            {!! Form::select('idCategoria',
                \App\Models\Categoria::orderBy('dsCategoria')->pluck('dsCategoria', 'id')->toArray(),
                $produto->idCategoria, ['class'=>'form-control','required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar Produto', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>
    
    {!! Form::close() !!}
@stop