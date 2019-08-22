<?php

namespace App\Http\Requests\Booking;

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
            'date'=>'required',
            'from_date'=>'required',
            'to_date'=>'required',
            'property_id'=>'required',
        ];
    }

    public function params()
    {
        $data = [
            'date' => $this->date,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'property_id' => $this->property_id,
            'total_price' => $this->total_price,
            'user_id' => auth()->id(),
        ];

        if ($this->payment_id) {
            $data['payment_id'] = $this->payment_id;
        }
        return $data;
    }
}
