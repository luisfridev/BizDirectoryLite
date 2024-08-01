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
        $categories = [
            'Fast Food',
            'Cakes',
            'Services',
            'Plomeros',
            'Carpinteros',
            'Músicos',
            'Mariachis',
            'Eventos',
        ];

        foreach ($categories as $name) {
            Category::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
