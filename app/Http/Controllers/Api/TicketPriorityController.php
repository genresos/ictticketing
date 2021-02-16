<?php

namespace App\Http\Controllers\Api;

use App\Tag;    
use App\Status;
use App\TicketPriority;
use App\Icon\Paginate\Paginate; 
use App\Icon\Filters\TicketPriorityFilter;
use App\Http\Requests\Api\CreateTicketPriority;
use App\Http\Requests\Api\UpdateTicketPriority;
use App\Http\Requests\Api\DeleteTicketPriority;
use App\Icon\Transformers\TicketPriorityTransformer;

class TicketPriorityController extends ApiController
{
    /**
     * TicketPriorityController constructor.
     *
     * @param TicketPriorityTransformer $transformer
     */
    public function __construct(TicketPriorityTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        $this->middleware('auth.api:optional')->only(['index', 'show']);
    }
    /**
     * Get all the ticket priority.
     *
     * @param TicketPriorityFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TicketPriorityFilter $filter)
    {
        $prioritys = new Paginate(TicketPriority::loadRelations()->filter($filter));

        return $this->respondWithPagination($prioritys);
    }
    
     /**
     * Create a new ticket priority and return the ticket priority if successful.
     *
     * @param CreateTicketPriority $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTicketPriority $request)
    {
        $user = auth()->user();

        $priority = $user->prioritys()->create([
            'name' => $request->input('priority.name'),
        ]);

        return $this->respondWithTransformer($priority);
    }
    /**
         * Get the priority given by its slug.
         *
         * @param TicketPriority $priority
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(TicketPriority $priority)
        {
            return $this->respondWithTransformer($priority);
        }

        /**
     * Update the ticket priority given by its slug and return the ticket priority if successful.
     *
     * @param UpdateTicketPriority $request
     * @param TicketPriority $priority
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTicketPriority $request, TicketPriority $priority)
    {
        if ($request->has('priority')) {
            $priority->update($request->get('priority'));
        }

        return $this->respondWithTransformer($priority);
    }

    /**
     * Delete the ticket priority given by its slug.
     *
     * @param DeleteTicketPriority $request
     * @param TicketPriority $priority
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTicketPriority $request, TicketPriority $priority)
    {
        $priority->delete();

        return $this->respondSuccess();
    }
}
