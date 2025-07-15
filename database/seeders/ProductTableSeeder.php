<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Importa o model correto

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usando a factory moderna para criar 30 produtos
        Product::factory(30)->create();
    }
}
