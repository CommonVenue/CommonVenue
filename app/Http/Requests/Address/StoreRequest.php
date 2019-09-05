<?php

namespace App\Http\Requests\Address;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'country'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'address_1'=>'required'
        ];
    }

    public function params()
    {
        $data = [
            'country' => $this->country,
            'city' => $this->city,
            'state' => $this->state,
            'unit' => $this->unit,
            'postal_code' => $this->postal_code,
            'address_1' => $this->address_1,
            'address_2' => $this->address_2,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ];
        return $data;
    }
}
