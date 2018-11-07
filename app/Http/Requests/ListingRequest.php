<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'sometimes|required|min:3|max:100',
            //'category_id' => '', //todo
            'description' => 'sometimes|required|min:10|max:350',
            'notes' => 'sometimes|min:10|max:350',
            'extra' => 'sometimes|min:10|max:350',
            'value' => 'sometimes|required',
            'attr_one' => 'sometimes|required',
            'attr_two' => 'sometimes|required',
        ];
    }
}
