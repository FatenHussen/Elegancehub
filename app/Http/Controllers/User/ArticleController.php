<?php

namespace App\Http\Controllers\User;

use App\Services\ArticleService;
use App\Http\Controllers\BaseIndexController;
use App\Http\Requests\User\FilterArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends BaseIndexController
{
    public function __construct(ArticleService $service)
    {
        $this->service = $service;
        $this->filterRequest = FilterArticleRequest::class;
    }

    public function getAll(FilterArticleRequest $request)
    {
        $filters = $request->validated();
        $res = $this->service->getAll($filters);
        
        return $this->sendResponse(message: __('custom.Success'), data: $res);
    }

    public function getOne($id)
    {
        $res = $this->service->getOne($id);
        
        return $this->sendResponse(message: __('custom.Success'), data: $res);
    }

    public function search(FilterArticleRequest $request)
    {
        $filters = $request->validated();
        $res = $this->service->search($filters);
        return $this->sendResponse(data: $res, message: __('custom.Success'));
    }
    
}
