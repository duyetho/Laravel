<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\signupController;
class signupRequest extends FormRequest
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
            'name'=>'request|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages(){
        return[
            'name.string' =>'vui lòng nhập đúng tên',
            'age.numeric' =>'vui lòng nhập đúng tuổi',
            'date.string' =>'vui lòng điền ngày tháng',
            'phone.numeric' =>'vui lòng kiểm tra lại số điện thoại',
            'web.string' =>'vui lòng kiểm tra lại ký tự',
            'address.string' =>'vui lòng nhập lại địa chỉ'

        ];


    }
}
