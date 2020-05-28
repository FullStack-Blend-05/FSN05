<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
class PaginasController extends Controller
{
    // Mostrar a pagina index
    public function index (){
      
        //variavel produtos$
        $produtos = Produto::all();
        return view('index', compact('produtos'));
    }

    // Mostrar a pagina checkout
    public function checkout(){
        return view('checkout');
    }
    
    // Mostrar a pagina store
    public function store(){
        return view('store');
    }
    
    // Mostrar a show produto
    public function show(){
        return view('product'); 
    }
}
