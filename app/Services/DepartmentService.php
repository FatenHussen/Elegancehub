<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService extends BaseService
{
    protected $model;

    public function __construct(Department $model)
    {
        $this->model = $model;
    }

}