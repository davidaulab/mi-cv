@extends('layouts.app')

@section('title', 'Nueva experiencia')

@section('content')

<h1>Nueva experiencia</h1>

<form method="post" action="{{ route ('exps.update', $exp->id) }}">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titulo </label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $exp->title }}">    
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria </label>
        <input type="text" class="form-control" id="category"name="category"  value="{{ $exp->category }}">    
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description">{{ $exp->description}}</textarea>

    </div>
    <div class="text-center">
        @foreach ($tags as $tag)
   
            <input type="checkbox" name="tags[]" value="{{$tag->id}}"
            {{ (($exp->tags->find($tag->id)) ? "checked" : "") }}
            >
            <img src="{{$tag->img}}" style="height: 2em"            >

        @endforeach
    </div>
    
    <div class="text-center m-4" >
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
