<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'first_name' => 'Juan',
            'last_name' => 'Perez',
            'email' => 'juanperez@gmail.com',
            'phone_number' => '83301234567',
            'user_id' => '1',
        ]);

        Customer::create([
            'first_name' => 'Jorge',
            'last_name' => 'Hernandez',
            'email' => 'jorgehernandez@gmail.com',
            'phone_number' => '83398765432',
            'user_id' => '1',
        ]);
    }
}
