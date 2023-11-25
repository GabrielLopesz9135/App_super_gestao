<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $contato = new SiteContato();
        $contato->nome = 'Gabriel';
        $contato->telefone = '28999629961';
        $contato->email = 'gabriellopes9135@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Olá, gostei do Aplicativo';

        $contato->save(); */

        SiteContato::factory(100)->create();
    }
}
