<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['dsCategoria' => 'Livros']);
        Categoria::create(['dsCategoria' => 'Eletrônicos']);
        Categoria::create(['dsCategoria' => 'Roupas']);
        Categoria::create(['dsCategoria' => 'Eletrodomésticos']);
    }
}
