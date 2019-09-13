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
            //
        ];
    }

    public function params()
    {
        $images = $this->images;

        foreach ($images as $key => $image) {
            $name = time(). $key .'.'.$image->getClientOriginalExtension();
            $image->move(storage_path('app/public/images'), $name);
            
            $data[$key]['url'] = $name;
            $data[$key]['property_id'] = $this->property_id;
        }

        return $data;
    }
}
