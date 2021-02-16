<?php

namespace App\Http\Controllers\Api;

use App\Tag;    
use App\Status;
use App\TicketCategory;
use App\Icon\Paginate\Paginate; 
use App\Icon\Filters\TicketCategoryFilter;
use App\Http\Requests\Api\CreateTicketCategory;
use App\Http\Requests\Api\UpdateTicketCategory;
use App\Http\Requests\Api\DeleteTicketCategory;
use App\Icon\Transformers\TicketCategoryTransformer;

class TicketCategoryController extends ApiController
{
    /**
     * TicketCategoryController constructor.
     *
     * @param TicketCategoryTransformer $transformer
     */
    public function __construct(TicketCategoryTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        $this->middleware('auth.api:optional')->only(['index', 'show']);
    }
    /**
     * Get all the ticket category.
     *
     * @param TicketCategoryFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TicketCategoryFilter $filter)
    {
        $categorys = new Paginate(TicketCategory::loadRelations()->filter($filter));

        return $this->respondWithPagination($categorys);
    }
    
     /**
     * Create a new ticket category and return the ticket category if successful.
     *
     * @param CreateTicketCategory $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTicketCategory $request)
    {
        $user = auth()->user();

        $category = $user->categorys()->create([
            'name' => $request->input('category.name'),
        ]);

        return $this->respondWithTransformer($category);
    }
    /**
         * Get the category given by its slug.
         *
         * @param TicketCategory $category
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(TicketCategory $category)
        {
            return $this->respondWithTransformer($category);
        }

        /**
     * Update the ticket category given by its slug and return the ticket category if successful.
     *
     * @param UpdateTicketCategory $request
     * @param TicketCategory $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTicketCategory $request, TicketCategory $category)
    {
        if ($request->has('category')) {
            $category->update($request->get('category'));
        }

        return $this->respondWithTransformer($category);
    }

    /**
     * Delete the ticket category given by its slug.
     *
     * @param DeleteTicketCategory $request
     * @param TicketCategory $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTicketCategory $request, TicketCategory $category)
    {
        $category->delete();

        return $this->respondSuccess();
    }
}
