@extends('layouts.postsLayout')

@section('titulo', 'Reporte de posts')

@section('contenido')
    <div class="text-center">
        <h1 class="m-5">Reporte de Posts</h1>
    </div>
    <div class="text-center mb-3">
        <a href="{{route('posts.create')}}" class="btn btn-primary w-100">Crear post</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Contenido</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->titulo}}</td>
                    <td>{{$post->contenido}}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Acciones
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('posts.show', $post->id)}}">Ver</a></li>
                                <li><a class="dropdown-item" href="{{route('posts.edit', $post->id)}}">Editar</a></li>
                                <li><a class="dropdown-item" href="{{route('posts.destroy', $post->id)}}">Eliminar</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No hay posts registrados</td>
                </tr>
            @endforelse
        </tbody>
@endsection