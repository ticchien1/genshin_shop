<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'phone' => 'required|regex:/(0)[0-9]/|not_regex:/[a-z]/|min:10',
        ];
    }
    public function messages()
{
    return [
        'phone.required'=>' Số Điện Thoại Nhập Không Chính Xác',
       
        // 'body.required' => 'A message is required',
    ];
}
}
