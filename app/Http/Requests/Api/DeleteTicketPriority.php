<?php

namespace App\Http\Requests\Api;

class DeleteTicketPriority extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $priority = $this->route('priority');

        return $priority->user_id == auth()->id();
    }
}
