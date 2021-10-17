<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationUpdateRequest extends FormRequest
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
            'name'        => 'required|unique:destinations,name,'.request()->id,
            'category_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'        => 'Tên Điểm đến không được bỏ trống',
            'name.unique'          => 'Tên Điểm đến đã có trong cơ sở dữ liệu',
            'category_id.required' => 'Bạn phải chọn 1 danh mục'
        ];
    }
}
