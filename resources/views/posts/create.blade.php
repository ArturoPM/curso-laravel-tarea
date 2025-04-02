@extends('layouts.postsLayout')

@section('titulo', 'Crear post')

@section('contenido')
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo del post</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo del post" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="contenido" class="form-label">Contenido del post</label>
                    <textarea class="form-control" id="contenido" name="contenido" rows="3" placeholder="Ingresa el contenido del post" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <a href="{{route('posts.index')}}" class="btn btn-danger w-100">Regresar</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success w-100">Guardar post</button>
                </div>
            </div>
        </div>
    </form>
@endsection