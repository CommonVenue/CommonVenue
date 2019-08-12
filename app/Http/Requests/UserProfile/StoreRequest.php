<?php

namespace App\Http\Requests\UserProfile;

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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'country' => 'required'
        ];
    }

    public function params()
    {
        $data = $this->only(['first_name','last_name', 'avatar', 'description','country','postal_code', 'industry', 'job_title', 'organization']);

        $data['phone_number'] = auth()->user()->phone_number;
        $data['user_id'] = auth()->id();

        return $data;
    }
}
