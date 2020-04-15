<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAuthorsRequest extends FormRequest
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
          'authorname' => 'required|unique:authors',
          'birth_date' => 'nullable|date',
          'country' => 'required',
        ];
    }
}
