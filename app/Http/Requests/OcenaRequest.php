<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OcenaRequest extends FormRequest
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
            'ocena' => ['required', 'regex:/^[1-5]$/']
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ocena je obavezna.',
            'ocena.regex' => 'Dozvoljeni su samo brojevi od 1 do 5.'
        ];
    }
}
