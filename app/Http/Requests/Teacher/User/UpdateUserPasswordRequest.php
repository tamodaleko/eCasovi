<?php

namespace App\Http\Requests\Teacher\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|string|max:191',
            'new_password' => 'required|string|min:8|max:191|confirmed',
            'new_password_confirmation' => 'required|string|min:8|max:191'
        ];
    }
}
