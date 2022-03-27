<?php

namespace App\Http\Requests\TravelAgent;

use Illuminate\Foundation\Http\FormRequest;

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
            'username' => 'required|max:225',
            'title' => 'required|max:225',
            'slug' => 'required|max:225',
            'location' => 'required|max:225',
            'about' => 'required|max:225',
            'departure_date'=> 'required|date',
            'duration' => 'required|max:225',
            'type' => 'required|max:225',
            'price'=> 'required|integer'
        ];
    }
}
