<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(){
        return [
            'name'  => 'required|unique:categories',
            'image'     => 'required|mimes:jpeg,bmp,png,jpg'
        ];
    }
}
