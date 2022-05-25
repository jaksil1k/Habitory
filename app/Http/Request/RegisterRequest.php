<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'request',
            'email' =>'required|email',
            'subject'=>'required|min:5|max500',
        ];
    }

    public function attributes()
    {
        return[
            'name' => 'your name'
        ];
    }
    public function messages()
    {
        return [
            'name.require' => 'name is required',
            'email.email' => 'email is wrong format',
            'subject.require' => 'subject is required'
        ];
    }
}
