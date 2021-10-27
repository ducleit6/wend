<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
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
            'image' => 'required',
            'email' =>'required|email',
            'phone' => 'required|numeric',
            'password' => 'required',
            'confirm_password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên đã được sử dụng',
            'image.required' => 'Link Ảnh không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone.required' => 'SĐT không được để trống',
            'phone.numeric' => 'SĐT không được chứa kí tự',
            'password.required' => 'Password không được để trống',
            'confirm_password.required' => 'Confirm password không được để trống',
        ];
    }
}
