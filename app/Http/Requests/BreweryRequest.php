<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:30',
            'description' => 'required|min:20',
            'place' => 'required',
            'longitude' => 'required',
            'latitude' => 'required'
        ];
    }

    

    public function messages()
    {
        return [
            'name.required' => 'El campo es obligatorio',
            'name.min' => 'El campo es demasiado corto',
            'name.max' => 'El campo es demasiado largo',
            'description' => [
                'required' => 'El campo es obligatorio',
                'min' => 'El campo es demasiado corto'
            ],
            'place' => 'El campo es obligatorio',
            'longitude' => 'El campo es obligatorio',
            'latitude' => 'El campo es obligatorio'
        ];
    }

}
