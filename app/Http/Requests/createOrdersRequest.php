<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createOrdersRequest extends FormRequest
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
            'client_id'=> 'required',
            'book_id'=> 'required',
            'book_price'=> 'required',
            'count'=> 'required',
            'order_date'=> 'required|date',
            'execution_date' =>'nullable|date'
        ];
    }
}
