<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'produto_nome'     => 'Plano Essencial',
            'produto_desc'     => 'Descricao Pendente',
            'produto_preco'    => 39,
            'produto_desconto' => 0,
            'produto_ativo'    => TRUE,
            'categoria_id'     => rand(1, 6),
        ]);

        Produto::create([
            'produto_nome'     => 'Plano Premium',
            'produto_desc'     => 'Descricao Pendente',
            'produto_preco'    => 39,
            'produto_desconto' => 0,
            'produto_ativo'    => TRUE,
            'categoria_id'     => rand(1, 6),
        ]);

        Produto::create([
            'produto_nome'     => 'Plano Familiar',
            'produto_desc'     => 'Descricao Pendente',
            'produto_preco'    => 39,
            'produto_desconto' => 0,
            'produto_ativo'    => TRUE,
            'categoria_id'     => rand(1, 6),
        ]);

    }
}
