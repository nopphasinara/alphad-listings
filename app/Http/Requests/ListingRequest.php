<?php

namespace App\Http\Requests;

use App\Http\Utilities\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class ListingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     * @Reqest
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'title' => 'sometimes|required|min:3|max:100',
            'category_id' => ['sometimes', 'required', 'exists:categories,id'],
            'description' => 'sometimes|required|min:10|max:350',
            'notes' => 'sometimes|min:10|max:350',
            'extra' => 'sometimes|min:10|max:350',
            'value' => 'sometimes|required',
            'attr_one' => 'sometimes|required',
            'attr_two' => 'sometimes|required',
        ];
    }
}
