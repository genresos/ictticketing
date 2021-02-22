<?php

namespace App\Http\Controllers\Api;

use App\TicketCategory;
use App\Icon\Transformers\TicketCategoryTransformer;

class TicketCategoryController extends ApiController
{
    /**
     * TicketCategory constructor.
     *
     * @param TicketCategoryTransformer $transformer
     */
    public function __construct(TicketCategoryTransformer $transformer)
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
        $cat = TicketCategory::all();

        return $this->respondWithTransformer($cat);
    }
}
