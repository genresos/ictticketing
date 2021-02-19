<?php

namespace App\Http\Controllers\Api;

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
     * Ticket Controller constructor.
     *
     * @param TicketsTransformer $transformer
     */
    public function __construct(TicketsTransformer $transformer)
    {
        $this->transformer = $transformer;

        $this->middleware('auth.api')->except(['index', 'show']);
        // $this->middleware('auth.api:optional')->only(['index', 'show']);
        
    }
    public function index(TicketsFilter $filter)
    {
        $ticket = new Paginate(Tickets::loadRelations()->filter($filter));
        return $this->respondWithPagination($ticket);
    }
  /**
     * Create a new article and return the article if successful.
     *
     * @param CreateTickets $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTickets $request)
    {
        $user = auth()->user();

           $ticket = $user->tickets()->create([
            'title' => $request->input('tickets.title'),
            'description' => $request->input('tickets.description'),
            'assigned_to' => $request->input('tickets.assigned_to'),
            'category_id' => $request->input('tickets.category_id'),
            'status_id'   => $request->input('tickets.status_id'),
            'priority_id' => $request->input('tickets.priority_id'),
            
        ]);

        return $this->respondWithTransformer($ticket);
    }
    /**
     * Update the Tickets given by its slug and return the Tickets if successful.
     *
     * @param UpdateTickets $request
     * @param Tickets $ticket
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTickets $request, Tickets $ticket)
    {
        if ($request->has('tickets')) {
            $ticket->update($request->get('tickets'));
        }

        return $this->respondWithTransformer($ticket);
    }
    /**
     * Delete the tickets given by its slug.
     *
     * @param DeleteTickets $request
     * @param Tickets $ticket
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(DeleteTickets $request, Tickets $ticket)
    {
        $ticket->delete();

        return $this->respondSuccess();
    }
     /**
     * Get the Tickets given by its slug.
     *
     * @param Tickets $ticket
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Tickets $ticket)
    {
        return $this->respondWithTransformer($ticket);
    }
    
    
}