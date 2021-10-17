<?php

namespace App\Http\Requests\services;

use Illuminate\Foundation\Http\FormRequest;

class ServicesUpdateRequest extends FormRequest
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
            'name'=>'required|unique:services,name,'.request()->id
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để chống',
            'name.unique'=>'Danh mục <b>'.request()->name.'</b> đã tồn tại trong CSDL.'
        ];
    }
}
