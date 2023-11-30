<?php

namespace Database\Seeders;

use App\Models\MotivoContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MotivoContato::create(['motivo_contato'=>'Elogio']);
        MotivoContato::create(['motivo_contato'=>'Dúvida']);
        MotivoContato::create(['motivo_contato'=>'Reclamação']);

    }
}
