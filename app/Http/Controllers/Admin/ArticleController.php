<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseCRUDController;
use App\Services\ArticleService;
use App\Http\Requests\Admin\CreateArticleRequest;
use App\Http\Requests\Admin\UpdateArticleRequest;
use App\Http\Requests\User\FilterArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends BaseCRUDController
{
    public function __construct(ArticleService $service)
    {
        $this->service = $service;
        $this->createRequest = CreateArticleRequest::class;
        $this->updateRequest = UpdateArticleRequest::class;
    }

    public function search(FilterArticleRequest $request)
    {
        $filters = [
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id')
        ];

        $filters = array_filter($filters, function ($value) {
            return !is_null($value) && $value !== '';
        });

        $locale = $request->input('locale', 'en');

        $articles = $this->service->search($filters, $locale);

        return $this->sendResponse(data: $articles, message: __('custom.Success'));
    }
}
