<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;

class ContactFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => ['string', 'required'],
            'lastname' => ['string', 'required'],
            'email' => ['string', 'email', 'required'],
            'phone' => ['required', 'regex:/^\d+( \d+)*$/'],
            'message' => ['string', 'required'],
            'category_id' => ['string', 'required']
        ];

      
    }
}
