<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\User\CreateRatingRequest;
use App\Http\Requests\User\UpdateRatingRequest;
use Illuminate\Http\Request;
use App\Services\RatingService;

class RatingController extends BaseCRUDController
{
    public function __construct(RatingService $service)
    {
        $this->service = $service;
        $this->createRequest = CreateRatingRequest::class;
        $this->updateRequest = UpdateRatingRequest::class;
    }
}
