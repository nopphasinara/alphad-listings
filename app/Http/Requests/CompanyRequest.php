<?php

namespace App\Http\Requests;

use App\Http\Utilities\Location;
use App\Http\Utilities\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            'name' => 'sometimes|required|min:3|max:100',
//            'slug' => ['sometimes', 'required', 'min:3', 'max:100', Rule::unique('companies')->ignore($request->user()->company)],
            'category_id' => ['sometimes', 'required', 'exists:categories,id'],
            'description' => 'sometimes|required|min:10|max:150',
            'location' => ['sometimes', 'required', Rule::in(Location::locations())],
            //'sub_location' => [Rule::in(Location::sub-locations($request->location))],
            'address' => 'sometimes|required|min:5|max:150',
            'contact' => 'sometimes|required|min:10|max:150',
        ];
    }
}
