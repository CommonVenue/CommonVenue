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
            'state'=>'required',
            'city'=>'required',
            'postal_code'=>'required',
            'street_1'=>'required'
        ];
    }

    public function params()
    {
        $data = [
            'country' => $this->country,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'street_1' => $this->street_1,
            'address' => $this->address,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
        ];
        return $data;
    }
}
