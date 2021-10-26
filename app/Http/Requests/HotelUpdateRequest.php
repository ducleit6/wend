<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelUpdateRequest extends FormRequest
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
            'name'           => 'required|unique:hotels,name,'.request()->id,
            'destination_id' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'           => 'Tên Khách sạn không được bỏ trống',
            'name.unique'             => 'Tên Khách sạn đã có trong cơ sở dữ liệu',
            'destination_id.required' => 'Bạn phải chọn 1 điểm đến'
        ];
    }
}
