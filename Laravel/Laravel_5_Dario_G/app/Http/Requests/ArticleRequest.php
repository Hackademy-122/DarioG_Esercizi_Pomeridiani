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
            'brand'=>'required|min:5',
            'price'=>'required|numeric',
            'where'=>'required',
            'img'=>'required|image',
        ];
    }

    public function messages()
    {
        return [
            'brand.required'=>'Almeno 5 caratteri',
            'price.required'=>'Inserisci il prezzo',
            'where.required'=>'Campo richiesto',
            'img.required'=>'Obbligatoria',
            'img.image'=>'Solo immagini'
        ];
    }
}
