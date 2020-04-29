<?php

namespace App\Http\Requests;

use App\Rules\Myrule;
use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() == "hello";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "mail" => "email",
            "age" => ["numeric", new Myrule(5)]
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "名前は必ず入力して",
            "mail.email" => "メールの形で",
            "age.numeric" => "すうじで",
            "age.between" => "指定の形で"
        ];
    }
}
