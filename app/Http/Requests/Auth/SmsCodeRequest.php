<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class SmsCodeRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => [
                'required',
                'mobile'
            ],
        ];
    }

    /**
     * 自定义属性
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'phone' => '手机号码',
        ];
    }
}