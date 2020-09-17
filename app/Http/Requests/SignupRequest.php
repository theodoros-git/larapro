<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required|min:3',
            'prename' => 'required|min:3',
            'phone' => 'required|min:8',
            'niveau' => 'required',
            'email' => 'required|email',
            'mdp' => 'required|min:8',
            'cmdp' => 'required|min:8'
        ];
    }
}
