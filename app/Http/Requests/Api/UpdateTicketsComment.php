<?php

namespace App\Http\Requests\Api;

class UpdateTiketsComment extends ApiRequest
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
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $comment = $this->route('comment');

        return $comment->user_id == auth()->id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment_text' => 'sometimes|string|max:255',
            'user_id' => 'sometimes|string|max:255', 
        ];
    }
}
