<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:2|max:191',
            'last_name' => 'max:191',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w]).{6,}$/',
            'role_id' => 'required',
            'employee_id' => 'exclude_if:role_id,4|required|unique:users,employee_id',
            'department' => 'exclude_if:role_id,4|required',
            'designation' => 'exclude_if:role_id,4|required',
            'gender' => 'required',
            'bank_name' => 'required_with:account_number|required_with:branch|min:3|max:50|nullable',
            'account_number' => 'exclude_if:role_id,4|required_with:bank_name|min:9|max:20|nullable',
            'branch' => 'exclude_if:role_id,4|required_with:bank_name|min:3|max:50|nullable',
            'ifsc' => 'exclude_if:role_id,4|min:4|max:15|nullable',
            'pan_number' => 'exclude_if:role_id,4|min:9|max:15|nullable',
            'uan_number' => 'exclude_if:role_id,4|min:9|max:15|nullable',
            'address' => 'exclude_if:role_id,4|max:255|nullable'
        ];
    }
}