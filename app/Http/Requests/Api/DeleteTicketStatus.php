<?php

namespace App\Http\Requests\Api;

class DeleteTicketStatus extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $statuse = $this->route('statuse');

        return $statuse->user_id == auth()->id();
    }
}
