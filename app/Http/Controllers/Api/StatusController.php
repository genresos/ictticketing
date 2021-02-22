<?php

namespace App\Http\Controllers\Api;

use App\Status;
use App\Icon\Transformers\StatusTransformer;

class StatusController extends ApiController
{
    /**
     * TagController constructor.
     *
     * @param TagTransformer $transformer
     */
    public function __construct(StatusTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Get all the tags.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $statuses = Status::all(); //->pluck('name','image');

        return $this->respondWithTransformer($statuses);
    }
}
