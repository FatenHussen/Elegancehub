<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseIndexController;
use App\Http\Requests\User\DepartmentRequest;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends BaseIndexController
{
    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
        $this->filterRequest = DepartmentRequest::class;

    }
}
