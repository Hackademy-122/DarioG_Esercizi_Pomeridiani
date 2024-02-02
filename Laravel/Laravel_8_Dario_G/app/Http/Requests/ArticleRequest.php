<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:5',
            'price' => 'required|numeric',
            'price' => 'required|max: 4',

            'img'=> 'required'
            

        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name' => 'Il campo nome è obbligatorio almeno 5 caratteri',
            'price' => 'Il campo prezzo è obbligatorio, inserire un numero.',
            'price' => 'inserire un numero da 0 a 99',
            'img'=> 'inserire un immagine'
            
        ];
    }
}
