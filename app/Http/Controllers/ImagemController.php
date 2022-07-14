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

    public function store(Request $request)
    {
        $nomeDoArquivo = $request->input('nomeDoArquivo').'.jpeg';
        $nova_imagem = ([
            'dsImagem' => $request->input('dsImagem'),
            'nomeDoArquivo' => $nomeDoArquivo,
            'idProduto' => $request->input('idProduto'),
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move(public_path('./Images'), $nomeDoArquivo);
        }
        
        
        Imagem::create($nova_imagem);

        return redirect()->route('imagens');
    }

    public function destroy($id)
    {
        try {
            // $imagem = Imagem::find($id);
            // File::delete(public_path('./Images'.$imagem->nomeDoArquivo));
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
        $imagem = Imagem::find($id);
        return view('imagens.edit', compact('imagem'));
    }

    public function update(ImagemRequest $request, $id)
    {
        $nomeDoArquivo = $request->input('nomeDoArquivo').'.jpeg';
        $update_imagem = ([
            'dsImagem' => $request->input('dsImagem'),
            'nomeDoArquivo' => $nomeDoArquivo,
            'idProduto' => $request->input('idProduto'),
        ]);

        if ($request->hasFile('image')) {
            $request->file('image')->move(public_path('./Images'), $nomeDoArquivo);
        }

        Imagem::find($id)->update($update_imagem);
        return redirect()->route('imagens');;
    }
}
