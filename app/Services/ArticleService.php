<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\App;

class ArticleService extends BaseService
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function getAll($filters = [])
    {
        $query = Article::query();
        foreach ($filters as $key => $value) {
            if ($key === 'locale') {
                continue;
            }
            if ($value !== null) {
                $query->where($key, $value);
            }
        }
        $articles = $query->get();
    
        return $articles->map(function ($article) use ($filters) {
            $locale = App::getLocale();
            return [
                'id' => $article->id,
                'title' => $article->getTranslation('title', $locale),
                'content' => $article->getTranslation('content', $locale),
                'category_id' => $article->category_id,
                'created_at' => $article->created_at,
                'updated_at' => $article->updated_at,
            ];
        });
    }

    public function getOne($id)
    {
        $locale = App::getLocale();
        $article = parent::getOne($id);

        return [
            'data' => [
                'id' => $article->id,
                'title' => $article->getTranslation('title', $locale),
                'content' => $article->getTranslation('content', $locale),
                'category_id' => $article->category_id,
                'created_at' => $article->created_at,
                'updated_at' => $article->updated_at,
            ],
            'message' => 'Successful operation.'
        ];
    }
    public function search($filters = [])
    {
        $locale = App::getLocale();
        $query = Article::query();
    
        if (isset($filters['query']) && $filters['query']) {
            $searchQuery = $filters['query'];
            $query->where(function ($queryBuilder) use ($searchQuery) {
                $queryBuilder->where('title', 'like', "%$searchQuery%")
                             ->orWhere('content', 'like', "%$searchQuery%");
            });
        }
    
        $articles = $query->get();
    
        return $articles->map(function ($article) use ($locale) {
            return [
                'id' => $article->id,
                'title' => $article->getTranslation('title', $locale),
                'content' => $article->getTranslation('content', $locale),
                'category_id' => $article->category_id,
                'created_at' => $article->created_at,
                'updated_at' => $article->updated_at,
            ];
        });
    }
}
