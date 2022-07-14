<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::orderBy('descricao')->paginate(5);
        return view('categorias.index', ['categorias'=>$categorias]);
    }

    public function create() {
        return view('categorias.create');
    }

    public function store(CategoriaRequest $request) {
        $nova_categoria = $request->all();
        Categoria::create($nova_categoria);

        return redirect()->route('categorias');
    }

    public function destroy($id) {
        Categoria::find($id)->delete();
        return redirect()->route('categorias');
    }

    public function edit($id) {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(CategoriaRequest $request) {
        Categoria::find($id)->update($request->all());
        return redirect()->route('categorias');
    }
}
