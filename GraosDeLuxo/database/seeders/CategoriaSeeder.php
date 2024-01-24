<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Categoria::create([
            'categoria_nome'  => 'Plano Essencial',
            'categoria_desc'  => 'Uma seleção cuidadosa de cafés gourmet de origem única ou blends exclusivos entregues mensalmente.',
            'categoria_ativo' => TRUE
        ]);

        Categoria::create([
            'categoria_nome'  => 'Plano Premium',
            'categoria_desc'  => 'Perfeito para amantes de café que compartilham a experiência em família ou entre amigos.',
            'categoria_ativo' => TRUE
        ]);

        Categoria::create([
            'categoria_nome'  => 'Plano Familiar',
            'categoria_desc'  => 'Uma experiência premium com cafés raros, edições limitadas e acessórios exclusivos.',
            'categoria_ativo' => TRUE
        ]);

    }
}
