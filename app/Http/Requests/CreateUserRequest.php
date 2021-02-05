<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:3|max:20|unique',
            'email' => 'required|email|max:50',
            'password' => 'required|min:8',
        ];
    }

    public function messages(){
        return [
            'name.required'  => '名前を入力してください。',
            'name.min'       => '名前は3文字以上で設定してください。',
            'name.max'       => '名前は20字以内で設定してください。',
            'name.unique'    => 'すでにこの名前は使用されています。',
            
            'email.required'  => 'メールアドレスを入力してください。',
            'email.email'     => 'メールアドレスの形式で入力してください。 例）xxx@xxx.co.jp',
            'email.max'       => 'メールアドレスは50字以内で設定してください。',

            'password.required'  => 'パスワードを入力してください。',
            'password.min'       => 'パスワードは8文字以上で設定してください。',
        ];
    }
}
