<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        // Create 50 records
        for ($i = 0; $i < 50; $i++) {
            Customer::create([
                'name' => $faker->text($maxNbChars = 80),
            ]);
        }
    }
}
