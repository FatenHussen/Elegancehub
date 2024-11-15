<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => ['en' => 'Understanding Laravel Eloquent', 'es' => 'Entendiendo Laravel Eloquent'],
                'content' => [
                    'en' => 'This article explains the basics of Laravel Eloquent...',
                    'es' => 'Este artículo explica los conceptos básicos de Laravel Eloquent...'
                ],
            ],
            [
                'title' => ['en' => 'Introduction to Web Development', 'es' => 'Introducción al Desarrollo Web'],
                'content' => [
                    'en' => 'Web development is a broad field that involves creating websites...',
                    'es' => 'El desarrollo web es un campo amplio que implica la creación de sitios web...'
                ],
            ],
            [
                'title' => ['en' => 'Health Benefits of Regular Exercise', 'es' => 'Beneficios para la Salud del Ejercicio Regular'],
                'content' => [
                    'en' => 'Exercising regularly offers numerous health benefits...',
                    'es' => 'Hacer ejercicio regularmente ofrece numerosos beneficios para la salud...'
                ],
            ],
            [
                'title' => ['en' => 'Top 10 JavaScript Frameworks in 2024', 'es' => 'Los 10 Mejores Frameworks de JavaScript en 2024'],
                'content' => [
                    'en' => 'JavaScript frameworks continue to evolve, offering more features...',
                    'es' => 'Los frameworks de JavaScript siguen evolucionando, ofreciendo más funciones...'
                ],
            ],
        ];

        foreach ($articles as $article) {
            Article::create([
                'title' => $article['title'], // Contains both 'en' and 'es' translations
                'content' => $article['content'], // Contains both 'en' and 'es' translations
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }
    }
}
