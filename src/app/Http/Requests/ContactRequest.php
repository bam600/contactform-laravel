<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        'last_name' => 'required',
        'first_name' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'first_tel' => 'required|numeric|digits_between:1,5',
        'middle_tel' => 'required|numeric|digits_between:1,5',
        'last_tel' => 'required|numeric|digits_between:1,5',

        'address' => 'required',
        'category_id' => 'required|exists:categories,id',
        'detail' => 'required|max:120',
    ];
}

    public function messages()
{
    return [
        'last_name.required' => '姓を入力してください。',
        'first_name.required' => '名を入力してください。',
        'gender.required' => '性別を選択してください。',
        'email.required' => 'メールアドレスを入力してください。',
        'email.email' => '有効なメールアドレス形式で入力してください。',
        'first_tel.required' => '電話番号（最初の部分）を入力してください。',
        'first_tel.numeric' => '電話番号（最初の部分）は数字で入力してください。',
        'first_tel.digits_between' => '電話番号（最初の部分）は5桁以内で入力してください。',
        'middle_tel.required' => '電話番号（中央の部分）を入力してください。',
        'middle_tel.numeric' => '電話番号（中央の部分）は数字で入力してください。',
        'middle_tel.digits_between' => '電話番号（中央の部分）は5桁以内で入力してください。',
        'last_tel.required' => '電話番号（最後の部分）を入力してください。',
        'last_tel.numeric' => '電話番号（最後の部分）は数字で入力してください。',
        'last_tel.digits_between' => '電話番号（最後の部分）は5桁以内で入力してください。',
        'address.required' => '住所を入力してください。',
        'category_id.required' => 'お問い合わせの種類を選択してください。',
        'category_id.exists' => '選択されたお問い合わせの種類は無効です。',
        'detail.required' => 'お問い合わせ内容を入力してください。',
        'detail.max' => 'お問い合わせ内容は120文字以内で入力してください。',
    ];
}
}
