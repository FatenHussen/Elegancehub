<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\BaseException;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseCRUDController;
use App\Services\CategoryService;
use App\Http\Requests\User\CategoryRequest;
use App\Http\Requests\User\FilterCategoryRequest;

class CategoryController extends BaseCRUDController
{
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
        $this->filterRequest = FilterCategoryRequest::class;
        $this->createRequest = CategoryRequest::class;
        $this->updateRequest = CategoryRequest::class;
    }
}
