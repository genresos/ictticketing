<?php

namespace App\Http\Requests\Api;

class DeleteTickets extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $tickets = $this->route('tickets');

        return $tickets->user_id == auth()->id();
    }
}
