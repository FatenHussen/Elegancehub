<?php

namespace App\Services;

use App\Models\Rating;

class RatingService extends BaseService
{
    protected $model;

    public function __construct(Rating $model)
    {
        $this->model = $model;
    }

}