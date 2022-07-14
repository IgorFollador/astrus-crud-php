<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Http\Requests\ImagemRequest;

class ImagemController extends Controller
{
    public function index()
    {
        $imagens = Imagem::orderBy('idProduto')->paginate(5);
        return view('imagens.index', ['imagens'=>$imagens]);
    }

    public function create()
    {
        return view('imagens.create');
    }

    public function store(ImagemRequest $request)
    {
        $nova_imagem = $request->all();
        Imagem::create($nova_imagem);

        return redirect()->route('imagens');
    }

    public function destroy($id)
    {
        try {
            Imagem::find($id)->delete();
            $ret = array('status' => 200, 'msg' => "null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        } catch (\PDOException $e) {
            $ret = array('status' => 500, 'msg' => $e->getMessage());
        }
        return $ret;
    }

    public function edit($id)
    {
        $produto = Imagem::find($id);
        return view('imagens.edit', compact('produto'));
    }

    public function update(ImagemRequest $request, $id)
    {
        Imagem::find($id)->update($request->all());
        return redirect()->route('imagens');;
    }
}
