<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class PaginasController extends Controller
{
    public function view($view, $campos = [])
    {
        $categorias = Categoria::all();
        $camposMerge = array_merge(compact('categorias'), $campos);
        return view($view, $camposMerge);
    }

    // Mostrar a pagina index
    public function index (){
        //variavel produtos$
        $produtos = Produto::all();
        return $this->view('index', compact('produtos'));
    }


    public function checkout(){
        return view('checkout');
    }
    
    // Mostrar a pagina store
    public function store(){
        return view('store');
    }
    
    // Mostrar a show produto
    public function show(){
        return $this->view('product');
    }
}
