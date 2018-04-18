<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZamowienieRequest extends FormRequest
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
            'liczba' => 'numeric|between:1,30'
        ];
    }

    public function messages()
    {
        return [
          'liczba.numeric' => 'Liczba musi być liczbą większa niż 1 i mniejsza niż 30',
          'liczba.between' => 'Liczba musi być liczbą większa niż 1 i mniejsza niż 30'
        ];
    }
}
