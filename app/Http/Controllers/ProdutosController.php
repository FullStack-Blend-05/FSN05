<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\Produto;

class ProdutosController extends Controller
{
    public function index(){
        return view('index');
    }
 
    public function cart(){
     return view('cart');
    }
 
     public function shop(){
         return view('shop');
     }
 
     //métodos para a página 
     public function showindex(){
         $produtos = Produto::paginate(5);
 
         return view('produtos.index', compact('produtos'));
     }
 
     public function create(){
         $categorias = Categoria::all();
 
         return view('produtos.create',compact('categorias'));
     }
 
     public function edit($id){
         $produtos = Produto::find($id);
         $categorias = Categoria::all();
 
         return view('produtos.edit',compact('produto','categorias'));
     }
 
     public function show($id){
         $produto = Produto::find($id);
         
         return view('produtos.show',compact('produto'));
     }
 
 
     //métodos de alteração
 
 
     public function store(){
         request()->validate(
             [
                 //$campo=>regraDeValidação
                 'nome'=>'required',
                 'categoria'=>'required',
                 'preco'=>'required | lt: 999.99'
             ]
         );
 
         $p = new produto;
         $p->nome = request('nome');
         $p->preco = request('preco');
  
        $p->categoria_id = request('categoria');
        
        $p->save();
 
        return redirect('/produtos');
     }
 
 
     public function update($id){
         request()->validate(
             [
                 'nome'=>'required',
                 'categoria'=>'required',
                 'preco'=>'required | lt:999.99',
             ]
         );
 
         $produto = Produto::find($id);
         $produto->nome = request('nome');
         $produto->categoria_id= request('categoria');
         $produto->preco = request('preco');
         $produto->save();
         return redirect('/produtos');
     }
 
     public function destroy($id){
 
        // $produto = Produto::find($id);
 
       //  $produto->delete();
 
       //mais curta
         Produto::where('id',$id)->delete();
         return back();
     }
}
