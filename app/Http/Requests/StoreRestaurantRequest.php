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

    public function meassages()
    {
        return [
            'business_name.required' => 'Il business_name del progetto è obbligatorio',
            'business_name.max' => 'Il business_name del progetto può essere lungo massimo 150 caratteri',
            'address.required' => 'Questo tipo non esiste',
            'vat_number.required' => 'Il vat_number del progetto è obbligatorio',
            'vat_number.max' => 'Il vat_number del progetto può essere lungo massimo 11 caratteri',
            'logo.required' => 'La logo del progetto è obbligatoria',
            



        ];
    }
}

