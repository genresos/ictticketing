<?php

namespace App\Http\Requests\Api;

class UpdateTickets extends ApiRequest
{
    // /**
    //  * Get data to be validated from the request.
    //  *
    //  * @return array
    //  */
    // protected function validationData()
    // {
    //     return $this->get('tickets') ?: [];
    // }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $ticket = $this->route('ticket');

        return $ticket->assigned_to == auth()->id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|string|max:255',  
            'description' => 'sometimes|string|max:255',  
        ];
    }
}
