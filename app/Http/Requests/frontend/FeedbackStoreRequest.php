<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'phone' => 'Телефон',
            'comment' => 'Комментарий',
            'name' => 'Имя',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => [
                'regex:/^\+?[0-9]{5,16}$/',
                'required'
            ],
            'comment' => 'required',
        ];
    }
}
