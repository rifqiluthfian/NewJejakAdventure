<?php

namespace App\Http\Requests\TravelAgent;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class TravelPackageRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:255',
            'username' => 'required|max:225',
            'location' => 'required|max:225',
            'departure_date'=> 'required|date',
            'duration' => 'required|max:225',
            'type' => 'required|max:225',
            'price'=> 'required|integer',
            'detail' => 'required|max:225',
            'itinerary' => 'required|max:225',
        ];
    }

}
