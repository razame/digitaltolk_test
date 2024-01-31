<?php

namespace App\Http\Requests;

use http\Client\Request;

class BookingRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // check authorization rule
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // In this way (key-value pair) we need to add validation rules
            // ------------------------------------------------------------
            // 'field' => 'rule',
        ];
    }

    public function messages(): array
    {
        return [
            // 'field.validation_rule' => 'Message on validation failure',
        ];
    }
}