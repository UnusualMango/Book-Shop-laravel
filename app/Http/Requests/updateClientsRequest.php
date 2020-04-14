<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateClientsRequest extends FormRequest
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
          'fullname' => 'required',
          'city' => 'required|min: 2',
          'adress' => 'required',
          'phone' => 'required',
        ];
    }
}
