<?php

namespace App\Http\Requests\Property;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            //
        ];
    }

    public function params()
    {
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'adult' => $this->adult,
            'wifi_name' => $this->wifi_name,
            'wifi_password' => $this->wifi_password,
            'location_description' => $this->location_description,
            'canceling_flexible' => $this->canceling_flexible,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'address_id' => $this->address_id,
            'owner_id'=> auth()->user()->id
        ];

        return $data;
    }
}
