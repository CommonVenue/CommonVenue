<?php

namespace App\Http\Requests\UserProfile;

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
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function params()
    {
        $data = $this->only(['first_name','last_name', 'phone_number', 'avatar', 'description','country','postal_code', 'industry', 'job_title', 'organization']);

        if ($this->hasFile('avatar')) {

            $image = $this->file('avatar');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');

            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            
            $data['avatar'] = $name;
        }
        
        return $data;
    }
}
