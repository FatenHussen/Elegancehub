<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample category data
        $categories = [
            [
                'name' => ['en' => 'Technology'],
            ],
            [
                'name' => ['en' => 'Science'],
            ],
            [
                'name' => ['en' => 'Health'],
            ],
            [
                'name' => ['en' => 'Lifestyle'],
            ],
            [
                'name' => ['en' => 'Education'],
            ],
            [
                'name' => ['en' => 'Sports'],
            ],
            [
                'name' => ['en' => 'Entertainment'],
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
