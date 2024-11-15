<?php

namespace App\Services;

use App\Exceptions\BaseException;
use App\Exceptions\CustomExceptionWithMessage;
use App\Exceptions\NotFoundException;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Comment;

class CommentService extends BaseService
{
    public function __construct(Comment $model)
    {
        $this->model = $model;
    }
}
