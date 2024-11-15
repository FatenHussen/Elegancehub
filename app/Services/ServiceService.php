<?php

namespace App\Services;

use App\Models\Service;

class ServiceService extends BaseService
{
    protected $model;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }

}