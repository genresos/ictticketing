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
        return $this->get('tickets_comment') ?: [];
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment_text' => 'required|string',
        ];
    }
}
