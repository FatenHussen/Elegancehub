<?php

namespace App\Services;

use App\Models\Appointment;
use App\Exceptions\NotFoundException;

class AppointmentService extends BaseService
{
    protected $model;

    public function __construct(Appointment $model)
    {
        $this->model = $model;
    }
}
