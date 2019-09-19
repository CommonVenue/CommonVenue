<?php

namespace App\Http\Requests\Booking;

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
            'date' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'total_price' => 'required',
            'payment_id' => 'required',
            'category_id' => 'required',
            'capacity' => 'required',
            'adult' => 'required',
            'property_id' => 'required'
        ];
    }
}
