<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createBooksRequest extends FormRequest
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
          'year' => 'required|max:4',
          'count' => 'required',
          'price' => 'required',
          'publisher_id' => 'required',
          'supplier_id' => 'required',
          'genre_id' => 'required',
        ];
    }
}
