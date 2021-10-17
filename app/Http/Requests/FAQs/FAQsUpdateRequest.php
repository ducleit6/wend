<?php

namespace App\Http\Requests\FAQs;

use Illuminate\Foundation\Http\FormRequest;

class FAQsUpdateRequest extends FormRequest
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
            'name'=>'required|unique:faqs,name,'.request()->id,
            'catfaqs_id'=>'required',
            'content'=>'required',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Câu hỏi không được để chống',
            'name.unique'=>'Câu hỏi <b>'.request()->name.'</b> đã tồn tại trong CSDL.',
            'catfaqs_id.required'=>'Câu hỏi không được để chống',
            'content.required'=>'Nội dung không được để chống',
            'status.required'=>'Trạng thái không được để chống'
        ];
    }
}
