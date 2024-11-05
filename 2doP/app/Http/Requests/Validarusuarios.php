<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validarusuarios extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
    'txtcorreo'=>'required|email',
    'txtcontra'=>'required|',
    'txtedad'=>'required|numeric'
        ];
    }
}
