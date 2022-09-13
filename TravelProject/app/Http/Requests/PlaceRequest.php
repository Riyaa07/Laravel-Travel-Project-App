<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'place_name' => 'required|min:3|unique:places,place_name,',
            'description' => 'required|min:10',
            'category' => 'required|min:5',
            'things_to_do' => 'required|min:10',
            'top_attractions' => 'required|min:10',
            'days' => 'required|min:3'
        ];
    }
}
