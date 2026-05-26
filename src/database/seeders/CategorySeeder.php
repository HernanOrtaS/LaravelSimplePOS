<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Limpieza',
            'description' => 'Productos de limpieza en general',
            'user_id' => '1',
        ]);

        Category::create([
            'name' => 'Salud',
            'description' => 'Productos de salud en general',
            'user_id' => '1',
        ]);

        Category::create([
            'name' => 'Mascotas',
            'description' => 'Productos de mascotas en general',
            'user_id' => '1',
        ]);
    }
}
