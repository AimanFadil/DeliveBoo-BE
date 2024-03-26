<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'business_name' => 'required|max:150',
            'address' => 'required',
            'vat_number' => 'required|max:11',
            'logo' => 'required',
            
          
        ];
    }

    public function messages()
    {
        return [
            'business_name.required' => 'Il nome del ristorante è obbligatorio',
            'business_name.max' => 'Il nome del ristorante può essere lungo massimo 150 caratteri',
            'address.required' => "L 'indirizzo è obbligatorio",
            'vat_number.required' => 'La partita IVA è obbligatoria',
            'vat_number.max' => 'La partita IVA deve essere lunga 11 caratteri',
            'logo.required' => 'Il logo è obbligatorio',
            



        ];
    }
}

