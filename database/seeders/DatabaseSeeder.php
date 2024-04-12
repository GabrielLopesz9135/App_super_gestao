<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Fornecedor;
use App\Models\Unidade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FornecedorSeeder::class,
            UnidadeSeeder::class,
            ProdutoSeeder::class
           // SiteContatoSeeder::class
           //MotivoContatoSeeder::class
        ]);
    }
}
