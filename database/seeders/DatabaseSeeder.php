<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
    \App\Models\Product::create([
    'img' => '/shoe.png',
    'brand' => 'Puma',
    'title' => 'Puma Velocity Nitro X',
    'rating' => 4.6,
    'reviews' => 88,
    'sellPrice' => 145.00,
    'orders' => '41',
    'mrp' => '175.00',
    'discount' => 17,
    'category' => 'men',
]);

\App\Models\Product::create([
    'img' => '/shoe.png',
    'brand' => 'Reebok',
    'title' => 'Reebok FloatRide Energy Pro',
    'rating' => 4.5,
    'reviews' => 74,
    'sellPrice' => 120.00,
    'orders' => '29',
    'mrp' => '150.00',
    'discount' => 20,
    'category' => 'women',
]);

\App\Models\Product::create([
    'img' => '/shoe.png',
    'brand' => 'New Balance',
    'title' => 'New Balance Fresh Foam Elite',
    'rating' => 4.9,
    'reviews' => 140,
    'sellPrice' => 170.00,
    'orders' => '63',
    'mrp' => '210.00',
    'discount' => 19,
    'category' => 'men',
]);

\App\Models\Product::create([
    'img' => '/shoe.png',
    'brand' => 'ASICS',
    'title' => 'ASICS Gel Nimbus Velocity',
    'rating' => 4.7,
    'reviews' => 102,
    'sellPrice' => 155.00,
    'orders' => '47',
    'mrp' => '190.00',
    'discount' => 18,
    'category' => 'women',
]);

\App\Models\Product::create([
    'img' => '/shoe.png',
    'brand' => 'Under Armour',
    'title' => 'UA Phantom Sprint SE',
    'rating' => 4.4,
    'reviews' => 69,
    'sellPrice' => 135.00,
    'orders' => '26',
    'mrp' => '165.00',
    'discount' => 18,
    'category' => 'men',
]);
    // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}