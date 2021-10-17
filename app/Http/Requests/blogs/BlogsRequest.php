<?php

namespace App\Http\Requests\blogs;

use Illuminate\Foundation\Http\FormRequest;

class BlogsRequest extends FormRequest
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
            'name'=>'required|unique:blogs,name,'.request()->id,
            'content'=>'required',
            'image'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Câu hỏi không được để chống',
            'name.unique'=>'Câu hỏi <b>'.request()->name.'</b> đã tồn tại trong CSDL.',
            'content.required'=>'Nội dung không được để chống',
            'image.required'=>'Ảnh không được để chống'
        ];
    }
}
