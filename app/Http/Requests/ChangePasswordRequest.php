<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required|min:8|max:100',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages() 
    {
        return[
            'password.required' => 'The password field is required.',
            'password.min' => trans('auth.min_password'),
            'password.max' => 'The password min 100.',
        ];
    }
}
