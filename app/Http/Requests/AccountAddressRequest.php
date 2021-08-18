<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountAddressRequest extends FormRequest
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
            "first_name" => "required",
            "last_name" => "required",
            "account_name" => "required",
            "address_country" => "required",
            "address_street" => "required",
            "address_city" => "required",
            "address_state" => "required",
            "address_postal_code" => "required",
            "email" => "email|required",
            "phone_number" => "required",
        ];
    }
}
