<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;

class ControllerProduto extends Controller
{
    public function index(){
        $produtos = Produto::orderBy('id')->get();

        // dd($produtos);
        // dd($produtos[0]->imagem);

        return view('produto.index', ['item' => $produtos]);
    }
    
    public function create(){
        
        return view('produto.create');
    }

    public function store( ProdutoRequest $request ){
        
        
        $request->validated();

        $produto = Produto::create( $request->all() );

        return redirect()->route('produto.show', ['produto' => $produto->id])->with('success', 'Produto criada com sucesso');
    }

    public function show(Produto $produto){
        return view('produto.show', ['produto' => $produto]);
    }

    public function edit(Produto $produto){
        return view('produto.edit', ['produto' => $produto]);
    }

    public function update(ProdutoRequest $request, Produto $produto){

        $request->validated();

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'vencimento' => $request->vencimento,
        ]);

        return redirect()->route('produto.show', ['produto' => $produto->id])->with('success', 'Produto alterado com sucesso');
    }

    public function destroy(Produto $produto){
        $produto->delete();

        return redirect()->route('produto.index', ['produto' => $produto->id])->with('success', 'Produto apagada com sucesso');
    }
}
