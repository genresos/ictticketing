<?php

namespace App\Http\Controllers\Api;

use App\TicketStatus;
use App\Icon\Transformers\TicketStatusTransformer;

class TicketStatusController extends ApiController
{
    /**
     * TicketStatus constructor.
     *
     * @param TicketStatusTransformer $transformer
     */
    public function __construct(TicketStatusTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Get all the cat.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $status = TicketStatus::all();

        return $this->respondWithTransformer($status);
    }
}
