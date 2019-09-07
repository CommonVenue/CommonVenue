<?php

namespace App\Http\Requests\PropertyImages;

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
            'url' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function params()
    {
            $image = $this->file('url');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            
            $data['url'] = $name;
            $data['property_id'] = $this->property_id;

            return $data;
    }
}
