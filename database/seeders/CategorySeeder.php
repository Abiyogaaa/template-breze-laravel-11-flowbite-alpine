<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Coffee',
            'slug' => 'coffee',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Non Coffee',
            'slug' => 'non-coffe',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'Update',
            'slug' => 'update',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Cafe',
            'slug' => 'cafe',
            'color' => 'yellow',
        ]);
    }
}
