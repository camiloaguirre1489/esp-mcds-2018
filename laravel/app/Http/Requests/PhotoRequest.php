<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'photo'       => 'required|image',
            'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'photo.required'       => 'El campo Foto es requerido.',
            'description.required' => 'El campo Descripción es requerido.',
        ];
    }
}
