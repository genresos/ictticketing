<?php

namespace App\Http\Requests\Api;

class DeleteTickets extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     $ticket = $this->route('ticket');

    //     return $ticket->user_id == auth()->id();
    // }
}
