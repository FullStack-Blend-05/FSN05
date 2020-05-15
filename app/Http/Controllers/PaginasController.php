<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    // Mostrar a pagina index
    public function index (){
        return view('index');
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
