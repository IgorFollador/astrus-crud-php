<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $table = "imagem";
    protected $fillable = ['dsImagem', 'nomeDoArquivo', 'idProduto'];

    public $timestamps = false;

    public function produto() {
        return $this->belongsTo("App\Models\Produto");
    }
}
