<?php

namespace App\Http\Requests\Api;

class CreateTickets extends ApiRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'assigned_to' => 'required|numeric|digits_between:0,1',
            'category_id' => 'required|numeric|digits_between:0,1',
            'priority_id' => 'required|numeric|digits_between:0,1',
            'status_id'   => 'required|numeric|digits_between:0,1',
        ];
    }
}
