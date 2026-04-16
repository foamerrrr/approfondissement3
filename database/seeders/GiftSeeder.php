<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gift;

class GiftSeeder extends Seeder
{
    public function run(): void
    {
        Gift::create([
            'name' => 'iPhone',
            'url' => 'https://apple.com',
            'details' => 'Smartphone Apple',
            'price' => 999.99,
        ]);

        Gift::create([
            'name' => 'Playstation 5',
            'url' => 'https://sony.com',
            'details' => 'Console de jeu',
            'price' => 499.99,
        ]);
    }
}
