@extends('layouts.app')

@section('title', 'Nueva experiencia')

@section('content')

<h1>Nueva experiencia</h1>

<form method="post" action="{{ route ('exps.store') }}">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titulo </label>
        <input type="text" class="form-control" id="title" name="title">    
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria </label>
        <input type="text" class="form-control" id="category"name="category">    
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description"></textarea>

    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary text-center" style="margin: auto;">Enviar</button>
    </div>
    <input type="hidden" value="/img/algo.png" name="img">
</form>

@if(Session::get ('success'))
<div class="bg-success">
    {{Session::get ('success') }}
</div>
@endif

@endsection
