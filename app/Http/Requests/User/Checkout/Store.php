<?php

namespace App\Http\Requests\USer\Checkout;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $expiredvalidation = date('Y-m', time());
        return [
            'name' =>'required',
            'email' =>'required|email|unique:users,email,'.Auth::id().',id',
            'occupation' =>'required',
            'card_number' =>'required|numeric|digits_between:8,16',
            'expired' =>'required|date_format:Y-m|after_or_equal:'.$expiredvalidation,
            'cvc' => 'required|numeric|digits:3',
        ];
    }
}
