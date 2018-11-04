<?php

namespace App\Http\Requests;

use App\Http\Utilities\Location;
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
            'name' => 'required|min:3|max:100',
            'slug' => ['required', 'min:3', 'max:100', Rule::unique('companies')->ignore($request->user()->company)],
            //'category_id' => '', //todo
            'description' => 'required|min:10|max:150',
            'location' => ['required', Rule::in(Location::locations())],
            //'sub_location' => [Rule::in(Location::sub-locations($request->location))],
            'address' => 'required|min:5|max:150',
            'contact' => 'required|min:10|max:150',
        ];
    }
}
