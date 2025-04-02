<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $posts = [
        [
            'id' => 1,
            'titulo' => 'Primer post',
            'contenido' => 'Contenido del post 1',
        ],
        [
            'id' => 2,
            'titulo' => 'Segundo post',
            'contenido' => 'Contenido del post 2',
        ],
        [
            'id' => 3,
            'titulo' => 'Tercer post',
            'contenido' => 'Contenido del post 3',
        ],
    ];

    public function index()
    {
        // Convertir cada array en objeto
        $posts = array_map(fn($post) => json_decode(json_encode($post)), $this->posts);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $titulo = $request->titulo;
        $contenido = $request->contenido;

        dd("Método para guardar el post", $titulo, $contenido);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = json_decode(json_encode($this->posts[$id - 1]));
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = json_decode(json_encode($this->posts[$id - 1]));
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $titulo = $request->titulo;
        $contenido = $request->contenido;

        dd("Método para actualizar el post", $id, $titulo, $contenido);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd("Método para eliminar el post", $id);
    }
}
