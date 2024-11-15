<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseCRUDController;
use App\Services\AppointmentService;
use App\Http\Requests\User\FilterAppointmentRequest;
use App\Http\Requests\User\CreateAppointmentRequest;
use App\Http\Requests\User\UpdateAppointmentRequest;

class AppointmentController extends BaseCRUDController
{
    public function __construct(AppointmentService $service)
    {
        $this->service = $service;
        $this->filterRequest = FilterAppointmentRequest::class;
        $this->createRequest = CreateAppointmentRequest::class;
        $this->updateRequest = UpdateAppointmentRequest::class;
    }  
}
