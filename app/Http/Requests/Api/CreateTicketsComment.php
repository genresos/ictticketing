<?php

namespace App\Http\Requests\Api;

class CreateTicketsComment extends ApiRequest
{
    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    protected function validationData()
    {
        return $this->get('comment') ?: [];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            'comment_text' => 'required|string|max:255',  
            'user_id' => 'required|string|max:255',  
        ];
    }
}
