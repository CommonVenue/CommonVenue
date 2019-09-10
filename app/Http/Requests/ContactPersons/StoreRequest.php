<?php

namespace App\Http\Requests\ContactPersons;

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
            'contact_number' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function params()
    {
        $data = $this->only(['first_name','last_name', 'contact_number', 'image']);

        if ($this->hasFile('image')) {

            $image = $this->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');

            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            
            $data['image'] = $name;
        }
        
        return $data;
    }
}
