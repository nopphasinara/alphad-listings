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
            'title' => 'required|min:3|max:100',
            //'category_id' => '', //todo
            'description' => 'required|min:10|max:350',
            'notes' => 'min:10|max:350',
            'extra' => 'min:10|max:350',
            'value' => 'required',
            'attr_one' => 'required',
            'attr_two' => 'required',
        ];
    }
}
