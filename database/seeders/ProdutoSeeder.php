<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\Unidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unidade::factory(6)
                ->has(Produto::factory()->count(5))
                ->create();
    }
}
