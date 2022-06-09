<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'code' => 'required|unique:users',
            'hometown' => 'required|max:255',
            'phone' => 'required|unique:users|max:15',
            'email' => 'required|email|unique:users',
            'position' => 'required|max:255',
            'department' =>'required',
            'datestart' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute không được bỏ trống',
            'code.required' => ':attribute không được bỏ trống',
            'code.unique' => ':attribute đã tồn tại',
            'hometown.required' => ':attribute không được bỏ trống',
            'phone.required' => ':attribute không được bỏ trống',
            'phone.unique' => ':attribute đã tồn tại',
            'email.required' => ':attribute không được bỏ trống',
            'email.unique' => ':attribute đã tồn tại',
            'position.required' => ':attribute không được bỏ trống',
            'department.required' => ':attribute không được bỏ trống',
            'datestart.required' => ':attribute không được bỏ trống'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'code' => 'Mã nhân viên',
            'hometown' => 'Quê quán',
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'position' => 'Chức vụ',
            'department' => 'Phòng ban',
            'datestart' => 'Ngày vào làm'
        ];
    }
}
