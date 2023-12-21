<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePonto_coletaRequest extends FormRequest
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
            'nome'=> 'required|string|max:250',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i|email|max:50',
            'fone'=> 'required|string|max:11',
            'endereco'=> 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];
    }
}
