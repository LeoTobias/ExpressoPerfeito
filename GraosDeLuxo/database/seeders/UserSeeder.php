<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'usuario_nome'  => 'Leonardo tobias',
            'usuario_email' => 'leotobias@gmail.com',
            'usuario_senha' => Hash::make('senha'),
            'usuario_cpf'   => '11111111111'
        ]);

        User::create([
            'usuario_nome'  => 'Jackson Viana',
            'usuario_email' => 'jackson@gmail.com',
            'usuario_senha' => Hash::make('senha'),
            'usuario_cpf'   => '22222222222'
        ]);
    }
}
