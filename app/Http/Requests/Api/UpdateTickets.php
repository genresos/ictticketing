<?php

namespace App\Http\Requests\Api;

class UpdateTikets extends ApiRequest
{
    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    protected function validationData()
    {
        return $this->get('tickets') ?: [];
    }

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string|max:255',  
            'title' => 'sometimes|string|max:255',  
            'description' => 'sometimes|string|max:255',  
            'assigned_to' => 'sometimes|string|max:255',  
            'category_id' => 'sometimes|string|max:255',  
            'status_id' => 'sometimes|string|max:255',  
            'priority_id' => 'sometimes|string|max:255',  
            'user_id' => 'sometimes|string|max:255', 
        ];
    }
}
