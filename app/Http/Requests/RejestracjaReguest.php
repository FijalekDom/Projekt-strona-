<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RejestracjaReguest extends FormRequest
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
            'login' => 'required|max:40',
            'haslo' => 'required|between:4,40',
            'imie' => 'required|max:40',
            'nazwisko' => 'required|max:50',
            'email' => 'required|unique:users|email',
            'miasto' => 'required',
            'adres_pocztowy' => 'required|regex:/^[0-9]{2}-[0-9]{3}$/',
            'ulica' => 'required',
            'nr_domu' => 'max:5',
            'nr_mieszkania' => 'max:4',
        ];
    }

    public function messages()
    {
        return [
          'login.required'=> 'Pole login jest wymagane.',
            'login.max'=> 'Login może mieć maksymalnie 40 znaków.',
            'haslo.required'=> 'Pole hasło jest wymagane.',
            'haslo.between'=> 'Hasło może mieć długość od 4 do 40 znaków.',
            'imie.required'=> 'Pole imię jest wymagane.',
            'imie.max'=> 'Imię może mieć maksymalnie 40 znaków.',
            'nazwisko.required'=> 'Pole nazwisko jest wymagane.',
            'nazwisko.max'=> 'Nazwisko może mieć maksymalnie 50 znaków.',
            'email.required'=> 'Pole email jest wymagane.',
            'email.unique'=> 'Konto z tym adresem email już istnieje.',
            'email.email'=> 'Email musi mieć format adresu email.',
            'miasto.required'=> 'Nazwa miasta jest wymagana.',
            'adres_pocztowy.required'=> 'Adres pocztowy jest wymagany.',
            'adres_pocztowy.regex'=> 'Adres pocztowy musi mieć format LL-LLL.',
            'ulica.required'=> 'Pole z nazwą ulicy jest wymagane.',
            'nr_domu.numeric'=> 'Numer budynku musi byc liczbą.',
            'nr_domu.max'=> 'Numer budynku może mieć maksymalnie 5 znaków.',
            'nr_mieszkania.max'=> 'Numer mieszkania może mieć maksymalnie 4 znaki.',
        ];

    }
}
