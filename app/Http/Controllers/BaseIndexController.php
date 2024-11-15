<?php

namespace App\Http\Controllers;

use App\Exceptions\BaseException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

abstract class BaseIndexController extends Controller
{
    protected $service;
    protected $filterRequest;

    protected function index(Request $request)
    {
        $filters = $this->filterRequest ? app($this->filterRequest)->validated() : [];
        $res = $this->service->getAll();
        return $this->sendResponse(data: $res, message: __('custom.Success'));
    }

    protected function get_one($id)
    {
        $res = $this->service->getOne($id);
        return $this->sendResponse(data: $res, message: __('custom.Success'));
    }
}