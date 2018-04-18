<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZmianaHaslaRequest extends FormRequest
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
            'obecne_haslo' => 'required',
            'nowe_haslo' => 'required|between:4,40',
            'nowe_haslo_potwierdz' => 'required|between:4,40'
        ];
    }

    public function messages()
    {
        return [
            'obecne_haslo.required' => 'Podaj obecne hasło',
            'nowe_haslo.required' => 'Podaj nowe hasło',
            'nowe_haslo.between' => 'Hasło może mieć długość od 4 do 40 znaków.',
            'nowe_haslo_potwierdz.required' => 'Potwierdź nowe hasło',
        ];
    }
}
