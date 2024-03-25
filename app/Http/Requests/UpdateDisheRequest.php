<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDisheRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'ingredients' => 'nullable|max:600',
            'description' => 'nullable|max:800',
            'price' => 'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Inserire il nome del piatto',
            'name.max' => 'La lunghezza massima consentita del nome è di 100 caratteri',
            'ingredients.max' => 'La lunghezza massima consentita degli ingredienti è di 600 caratteri',
            'description.max' => 'La lunghezza massima consentita della descrizione è di 800 caratteri',
            'price.required' => 'Inserire il prezzo',
            'price.numeric' => 'il prezzo deve essere inserito in formato numerico'
        ];
    }
}
