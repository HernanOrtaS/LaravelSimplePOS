<?php

namespace Database\Seeders;

use App\Models\PriceProductHistory;
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
        $products = $this->arrayProducts();

        foreach ($products as $product) {
            $this->createProductRegister($product);
        }
    }

    public function arrayProducts()
    {
        $products = [
            [
                'name' => 'Cloro',
                'description' => 'Botella de cloro liquido de 1 litro',
                'current_price' => '27.00',
                'sub_category_id' => '1',
                'user_id' => '1',
            ],
            [
                'name' => 'Limpia sarro',
                'description' => 'Botella de quita sarro para baño',
                'current_price' => '30.00',
                'sub_category_id' => '1',
                'user_id' => '1',
            ],
            [
                'name' => 'Lavatrastes',
                'description' => 'Producto lavatrastes en botella de 1 litro',
                'current_price' => '35.00',
                'sub_category_id' => '2',
                'user_id' => '1',
            ],
            [
                'name' => 'Quita cochambre',
                'description' => 'Producto para quitar cochambre del aluminio',
                'current_price' => '40.00',
                'sub_category_id' => '2',
                'user_id' => '1',
            ],
            [
                'name' => 'Probioticos',
                'description' => 'Botellas con probioticos',
                'current_price' => '55.00',
                'sub_category_id' => '3',
                'user_id' => '1',
            ],
            [
                'name' => 'Anti reflujo',
                'description' => 'Medicamento antireflujo en capsulas',
                'current_price' => '50.00',
                'sub_category_id' => '3',
                'user_id' => '1',
            ],
            [
                'name' => 'Gotas para oidos',
                'description' => 'Medicamento para oidos tapados',
                'current_price' => '41.00',
                'sub_category_id' => '4',
                'user_id' => '1',
            ],
            [
                'name' => 'Gotas para oidos de otra marca',
                'description' => 'Medicamento para oidos infectados',
                'current_price' => '51.00',
                'sub_category_id' => '4',
                'user_id' => '1',
            ],
            [
                'name' => 'Alimento para gatos',
                'description' => 'Alimento en croquetas para gatos',
                'current_price' => '60.00',
                'sub_category_id' => '5',
                'user_id' => '1',
            ],
            [
                'name' => 'Alimento para perros',
                'description' => 'Alimento en croquetas para perros',
                'current_price' => '60.00',
                'sub_category_id' => '5',
                'user_id' => '1',
            ],
            [
                'name' => 'Anti pulgas para perros',
                'description' => 'Talco en polvo para perros',
                'current_price' => '50.00',
                'sub_category_id' => '6',
                'user_id' => '1',
            ],
            [
                'name' => 'Anti pulgas para gatos',
                'description' => 'Talco en polvo para gatos',
                'current_price' => '55.00',
                'sub_category_id' => '6',
                'user_id' => '1',
            ],
        ];

        return $products;
    }

    public function createProductRegister($data)
    {
        $productCreated = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'current_price' => $data['current_price'],
            'sub_category_id' => $data['sub_category_id'],
            'user_id' => $data['user_id'],
        ]);

        PriceProductHistory::create([
            'price' => $data['current_price'],
            'product_id' => $productCreated['id'],
            'user_id' => $data['user_id'],
        ]);
    }
}
