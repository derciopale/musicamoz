@extends('generos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar Novo Genero</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('generos.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Introduza bem os dados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('generos.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                <input type="text" name="name" class="form-control" placeholder="Genero">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SubGenero:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="SubGenero"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
    </div>
   
</form>
@endsection