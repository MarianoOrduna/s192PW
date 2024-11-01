<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validaciones extends FormRequest
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
    'txtISBN'=>'required|numeric|min:13',
    'txttitulo'=>'required|max:150',
    'txtpaginas'=>'required|interger|min:1',
    'txtano'=>'required|interger|min:1',
    'txtemail'=>'required|email'
        ];
    }
}
