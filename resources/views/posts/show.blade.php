@extends('layouts.postsLayout')

@section('titulo', 'Ver un post')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Ver un Posts</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo del post</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo del post" value="{{$post->titulo}}" disabled>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label for="contenido" class="form-label">Contenido del post</label>
                <textarea class="form-control" id="contenido" name="contenido" rows="3" placeholder="Ingresa el contenido del post" disabled>{{$post->contenido}}</textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('posts.index')}}" class="btn btn-danger w-100">Regresar</a>
            </div>
        </div>
    </div>
@endsection