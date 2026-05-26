<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubCategory::create([
            'name' => 'Limpieza de Baños',
            'description' => 'Productos generales de limpieza de baños',
            'user_id' => '1',
            'category_id' => '1',
        ]);

        SubCategory::create([
            'name' => 'Limpieza de Cocina',
            'description' => 'Productos generales de limpieza de cocina',
            'user_id' => '1',
            'category_id' => '1',
        ]);

        SubCategory::create([
            'name' => 'Salud intestinal',
            'description' => 'Productos generales de salud intestinal',
            'user_id' => '1',
            'category_id' => '2',
        ]);

        SubCategory::create([
            'name' => 'Salud auditiva',
            'description' => 'Productos generales de salud auditiva',
            'user_id' => '1',
            'category_id' => '2',
        ]);

        SubCategory::create([
            'name' => 'Alimento para mascotas',
            'description' => 'Productos generales de alimento para mascotas',
            'user_id' => '1',
            'category_id' => '3',
        ]);

        SubCategory::create([
            'name' => 'Medicamentos para mascotas',
            'description' => 'Productos generales de medicamento para mascotas',
            'user_id' => '1',
            'category_id' => '3',
        ]);
    }
}
