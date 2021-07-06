<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateDeviceRequest extends apiRequest
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
          "title" => "required",
          "imei" => "required|numeric",
          "imsi" => "required|numeric",
          "msisdn" => "regex:/^7\d{10}$/"
        ];
    }
}
