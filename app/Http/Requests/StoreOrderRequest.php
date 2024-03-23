<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'name' => 'required|max:50',
            'mail' => 'required|max:70',
            'address' => 'required|max:200',
            'date_delivery' => 'required',
            'phone' => 'min:10|max:14'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Inserire il nome',
            'name.max' => 'La lunghezza massima consentita per il nome è di 50 caratteri',
            'mail.required' => 'Inserie unindirizzo mail',
            'mail.max' => 'La lunghezza massima consentita per la mail è di 70 caratteri',
            'address.required' => 'Inserire un indirizzo per la consegna',
            'address.max' => "La lunghezza massima consentita per l'indirizzo è di 70 caratteri",
            'date_delivery.required' => 'Inserire la data di consegna',
            'phone.min' => 'Inserire un Numero di telefono valido, i numeri inseriti sono meno di 10',
            'phone.max' => 'Inserire un Numero di telefono valido, i numeri inseriti sono più di 14',
        ];
    }
}
