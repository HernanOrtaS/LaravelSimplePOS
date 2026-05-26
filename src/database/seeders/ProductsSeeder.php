<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Cloro',
            'description' => 'Botella de cloro liquido de 1 litro',
            'sub_category_id' => '1',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Limpia sarro',
            'description' => 'Botella de quita sarro para baño',
            'sub_category_id' => '1',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Lavatrastes',
            'description' => 'Producto lavatrastes en botella de 1 litro',
            'sub_category_id' => '2',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Quita cochambre',
            'description' => 'Producto para quitar cochambre del aluminio',
            'sub_category_id' => '2',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Probioticos',
            'description' => 'Botellas con probioticos',
            'sub_category_id' => '3',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Anti reflujo',
            'description' => 'Medicamento antireflujo en capsulas',
            'sub_category_id' => '3',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Gotas para oidos',
            'description' => 'Medicamento para oidos tapados',
            'sub_category_id' => '4',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Gotaas para oidos de otra marca',
            'description' => 'Medicamento para oidos infectados',
            'sub_category_id' => '4',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Alimento para gatos',
            'description' => 'Alimento en croquetas para gatos',
            'sub_category_id' => '5',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Alimento para perros',
            'description' => 'Alimento en croquetas para perros',
            'sub_category_id' => '5',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Anti pulgas para perros',
            'description' => 'Talco en polvo para perros',
            'sub_category_id' => '6',
            'user_id' => '1'
        ]);

        Product::create([
            'name' => 'Anti pulgas para gatos',
            'description' => 'Talco en polvo para gatos',
            'sub_category_id' => '6',
            'user_id' => '1'
        ]);
    }
}
