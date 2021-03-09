<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
            'seriesName' => 'required|min:1'
        ];
    }

    /**
     * Custom messages of validation
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'seriesName.required' => 'Caralho, o nome do produto deve ser obrigatorio pnc',
            'sereis.min' => 'Series must be 1 letter'
        ];
    }
}
