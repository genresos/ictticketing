<?php

namespace App\Http\Requests\Api;

class DeleteTicketCategory extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $category = $this->route('category');

        return $category->user_id == auth()->id();
    }
}
