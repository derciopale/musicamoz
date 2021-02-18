@extends('adminlte::page')

@section('title', 'Generos')

@section('content_header')
@extends('generos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MusicaMoz.co.mz</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('generos.create') }}"> Criar Novo Genero</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Genero</th>
            <th>SubGenero</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($generos as $genero)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $genero->genero }}</td>
            <td>{{ $genero->subgenero }}</td>
            <td>
                <form action="{{ route('generos.destroy',$genero->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('generos.show',$genero->id) }}">Exibir</a>
    
                    <a class="btn btn-primary" href="{{ route('generos.edit',$genero->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $generos->links() !!}
      
@endsection