@extends('layouts.app')

@section('title', 'Nueva experiencia')

@section('content')

<h1>Nuevo lenguaje </h1>

<form method="post" action="{{ route ('tags.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="title" name="title">    
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Fichero </label>
        <input type="file" class="form-control" id="fichero" name="img">    
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center" style="margin: auto;">Enviar</button>
    </div>
   
</form>

@if(Session::get ('success'))
<div class="bg-success">
    {{Session::get ('success') }}
</div>
@endif

@endsection
