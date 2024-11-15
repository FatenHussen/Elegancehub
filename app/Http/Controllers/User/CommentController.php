<?php

namespace App\Http\Controllers\User;

use App\Services\CommentService;
use App\Http\Requests\User\CreateCommentRequest;
use App\Http\Requests\User\UpdateCommentRequest;
use App\Http\Controllers\BaseCRUDController;


class CommentController extends BaseCRUDController
{
    public function __construct(CommentService $service)
    {
        $this->service = $service;
        $this->createRequest = CreateCommentRequest::class;
        $this->updateRequest = UpdateCommentRequest::class;
    }
}
