<?php

namespace App\Http\Controllers\Api;

use App\Tag;    
use App\Status;
use App\TicketStatus;
use App\Icon\Paginate\Paginate; 
use App\Icon\Filters\TicketStatusFilter;
use App\Http\Requests\Api\CreateTicketStatus;
use App\Http\Requests\Api\UpdateTicketStatus;
use App\Http\Requests\Api\DeleteTicketStatus;
use App\Icon\Transformers\TicketStatusTransformer;

class TicketStatusController extends ApiController
{
    /**
     * Ticket status Controller constructor.
     *
     * @param TicketStatusTransformer $transformer
     */
    public function __construct(TicketStatusTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        $this->middleware('auth.api:optional')->only(['index', 'show']);
    }
    /**
     * Get all the ticket status.
     *
     * @param TicketStatusFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TicketStatusFilter $filter)
    {
        $statuses = new Paginate(TicketStatus::loadRelations()->filter($filter));

        return $this->respondWithPagination($statuses);
    }
    
     /**
     * Create a new ticket status and return the ticket statuse if successful.
     *
     * @param CreateTicketStatus $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTicketStatus $request)
    {
        $user = auth()->user();

        $statuse = $user->statuses()->create([
            'name' => $request->input('statuse.name'),
        ]);

        return $this->respondWithTransformer($statuse);
    }
    /**
         * Get the statuse given by its slug.
         *
         * @param TicketStatus $statuse
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(TicketStatus $statuse)
        {
            return $this->respondWithTransformer($statuse);
        }

        /**
     * Update the ticket statuse given by its slug and return the ticket status if successful.
     *
     * @param UpdateTicketStatus $request
     * @param TicketStatus $statuse
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTicketStatus $request, TicketStatus $statuse)
    {
        if ($request->has('statuse')) {
            $statuse->update($request->get('statuse'));
        }

        return $this->respondWithTransformer($statuse);
    }

    /**
     * Delete the ticket statuse given by its slug.
     *
     * @param DeleteTicketStatus $request
     * @param TicketStatus $statuse
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTicketStatus $request, TicketStatus $statuse)
    {
        $statuse->delete();

        return $this->respondSuccess();
    }
}
