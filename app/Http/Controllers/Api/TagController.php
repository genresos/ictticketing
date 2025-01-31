<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\Icon\Transformers\TagTransformer;

class TagController extends ApiController
{
    /**
     * TagController constructor.
     *
     * @param TagTransformer $transformer
     */
    public function __construct(TagTransformer $transformer)
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
        $tags = Tag::all(); //->pluck('name','image');

        return $this->respondWithTransformer($tags);
    }
}
