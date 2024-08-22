<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Playa del Carmen',
            'Cancún',
            'Puerto Morelos',
            'Tulum',
            'Puerto Aventuras',
            'Cozumel'
        ];

        foreach ($cities as $name) {
            City::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
