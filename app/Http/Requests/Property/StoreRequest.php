<?php

namespace App\Http\Requests\Property;

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
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'image'=>'required'
        ];
    }

    public function params()
    {
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'owner_id'=> auth()->user()->id
        ];

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
