<?php

namespace App\Services;

use App\Models\Doctor;

class DoctorService extends BaseService
{
    protected $model;

    public function __construct(Doctor $model)
    {
        $this->model = $model;
    }

}