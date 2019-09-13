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
        $data = [];

        if ($this->name) {
            $data['name'] = $this->name;
        }
        if ($this->description) {
            $data['description'] = $this->description;
        }
        if ($this->adult) {
            $data['adult'] = $this->adult;
        }
        if ($this->wifi_name) {
            $data['wifi_name'] = $this->wifi_name;
        }
        if ($this->wifi_password) {
            $data['wifi_password'] = $this->wifi_password;
        }
        if ($this->location_description) {
            $data['location_description'] = $this->location_description;
        }
        if ($this->canceling_flexible) {
            $data['canceling_flexible'] = $this->canceling_flexible;
        }
        if ($this->category_id) {
            $data['category_id'] = $this->category_id;
        }
        if ($this->price) {
            $data['price'] = $this->price;
        }
        if ($this->address_id) {
            $data['address_id'] = $this->address_id;
        }
        if ($this->owner_id) {
            $data['owner_id'] = $this->owner_id;
        }
        if ($this->min_hours) {
            $data['min_hours'] = $this->min_hours;
        }
        if ($this->cleaning_fee) {
            $data['cleaning_fee'] = $this->cleaning_fee;
        }
        if ($this->capacity) {
            $data['capacity'] = $this->capacity;
        }
        if ($this->contact_person_id) {
            $data['contact_person_id'] = $this->contact_person_id;
        }
        
        $data['property_id'] = $this->property_id;
        if(isset($this->all()['canceling_flexible']) && !isset($data['canceling_flexible'])){
            $data['canceling_flexible'] = "0";
        }

        return $data;
    }
}
