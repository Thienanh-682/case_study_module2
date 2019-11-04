<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'group' => 'required',
            'point' => 'required',
            'capacity' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'This field cannot be empty',
          'phone.required' => 'This field cannot be empty',
          'address.required' => 'This field cannot be empty',
          'group.required' => 'This field cannot be empty',
          'point.required' => 'This field cannot be empty',
          'capacity.required' => 'This field cannot be empty'
        ];
    }
}
