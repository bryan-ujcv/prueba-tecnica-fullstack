<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'titulo' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'url' => 'required|min:3'
        ]);

        $noticia = new Noticia();
        $noticia->titulo = $req->titulo;
        $noticia->descripcion = $req->descripcion;
        $noticia->url = $req->url;
        $noticia->save();
        return redirect()->route('noticias')->with('success', 'Noticia creada correctamente');
    }

    public function index(){
        $noticias=Noticia::latest()->get();       
        return view('mostrar',['noticias' => $noticias]);
    }

    public function show($id){
        $noticia=Noticia::find($id);
        return view('editar',['noticia' => $noticia]);
    }

    public function update(Request $req , $id){
        $noticia=Noticia::find($id);
        $noticia->titulo=$req->titulo;
        $noticia->descripcion=$req->descripcion;
        $noticia->url=$req->url;
        $noticia->save();
        return redirect()->route('noticias')->with('success', 'Noticia Actualizada');
    }

    public function destroy($id){
        $noticia=Noticia::find($id);
        $noticia->delete();
        return redirect()->route('noticias')->with('deleted', 'Noticia Eliminada');
    }
}
