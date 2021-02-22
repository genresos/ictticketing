<?php

namespace App\Http\Controllers\Api;

use App\TicketPriority;
use App\Icon\Transformers\TicketPriorityTransformer;

class TicketPriorityController extends ApiController
{
    /**
     * TicketPriority constructor.
     *
     * @param TicketPriorityTransformer $transformer
     */
    public function __construct(TicketPriorityTransformer $transformer)
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
        $priority = TicketPriority::all();

        return $this->respondWithTransformer($priority);
    }
}
