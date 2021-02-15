@extends('generos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Generos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('generos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genero:</strong>
                {{ $genero->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>SubGenero:</strong>
                {{ $genero->subgenero }}
            </div>
        </div>
    </div>
@endsection