<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            //
            'category_id'  => 'required',
            'name'      => 'required',
            'price'     => 'numeric',
            'quantity'  => 'numeric',
            'size'      => 'required',
            'color'     => 'required',
            'image'     => 'mimes:jpeg,bmp,png,jpg',
            'images.*' => 'mimes:jpg,jpeg,png,bmp'
        ];
    }
}
