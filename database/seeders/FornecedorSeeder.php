<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Xiomi';
        $fornecedor->site = 'xiomu.com.br';
        $fornecedor->email = 'xiomi@contato.com';
        $fornecedor->UF = 'CH';
        $fornecedor->save();

        Fornecedor::create([
            'nome'=>'Sansung',
            'site'=>'Sansung.com.br',
            'email'=>'sansung@contato.com.br',
            'UF'=>'KO',
        ]); */

         Fornecedor::factory(15)->create();
    }
}
