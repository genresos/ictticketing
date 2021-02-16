<?php

namespace App\Http\Controllers\Api;

use App\Tag;    
use App\Status;
use App\Tickets;
use App\Icon\Paginate\Paginate; 
use App\Icon\Filters\TicketsFilter;
use App\Http\Requests\Api\CreateTickets;
use App\Http\Requests\Api\UpdateTickets;
use App\Http\Requests\Api\DeleteTickets;
use App\Icon\Transformers\TicketsTransformer;

class TicketsController extends ApiController
{
    /**
     * Ticket status Controller constructor.
     *
     * @param TicketsTransformer $transformer
     */
    public function __construct(TicketsTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        $this->middleware('auth.api:optional')->only(['index', 'show']);
    }
    /**
     * Get all the ticket status.
     *
     * @param TicketsFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(TicketsFilter $filter)
    {
        $ticketss = new Paginate(Tickets::loadRelations()->filter($filter));

        return $this->respondWithPagination($ticketss);
    }
    
     /**
     * Create a new ticket status and return the ticket if successful.
     *
     * @param CreateTickets $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTickets $request)
    {
        $user = auth()->user();

        $tickets = $user->ticketss()->create([
            'title' => $request->input('tickets.name'),
            'description' => $request->input('tickets.description'),
            'assigned_to' => $request->input('tickets.assigned_to'),
            'category_id' => $request->input('tickets.category_id'),
            'status_id' => $request->input('tickets.status_id'),
            'priority_id' => $request->input('tickets.priority_id'),
            'user_id' => $request->input('tickets.user_id'),
        ]);

        return $this->respondWithTransformer($tickets);
    }
    /**
         * Get tht given by its slug.
         *
         * @param Tickets $tickets
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(Tickets $tickets)
        {
            return $this->respondWithTransformer($tickets);
        }

        /**
     * Update the ticket given by its slug and return the ticket status if successful.
     *
     * @param UpdateTickets $request
     * @param Tickets $tickets
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTickets $request, Tickets $tickets)
    {
        if ($request->has('tickets')) {
            $tickets->update($request->get('tickets'));
        }

        return $this->respondWithTransformer($tickets);
    }

    /**
     * Delete the ticket given by its slug.
     *
     * @param DeleteTickets $request
     * @param Tickets $tickets
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTickets $request, Tickets $tickets)
    {
        $tickets->delete();

        return $this->respondSuccess();
    }
}
