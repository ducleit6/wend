<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourUpdateRequest extends FormRequest
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
            'name'        => 'required|unique:tours,name,'.request()->id,
            'destination_id' => 'required',
            'price' => 'required|numeric|min:0.1',
            'sale_price' => 'numeric|between:0,'.request()->price,
            'myfile' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'        => 'Tên Điểm đến không được bỏ trống',
            'name.unique'          => 'Tên Điểm đến đã có trong cơ sở dữ liệu',
            'destination_id.required' => 'Bạn phải chọn 1 danh mục',
            'price.required' => 'Bạn phải nhập giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm phải là 1 giá trị số',
            'price.min' => ' Giá sản phẩm phải lớn hơn 0',
            'sale_price.numeric' => 'Giá Khuyến mại phải là 1 giá trị số',
            'sale_price.between' => 'Giá Khuyến mại phải >= 0 và <= giá sản phẩm',
            'myfile.required' => 'Ảnh đại diện không được để trống'
        ];
    }
}
