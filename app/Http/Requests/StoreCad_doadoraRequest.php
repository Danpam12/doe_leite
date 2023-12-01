<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCad_doadoraRequest extends FormRequest
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
            'data_nasc'=> 'required|date',
            'endereco'=>'required|string',
            'fone'=>'required|string',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i|email|max:50',
            'pre_nat'=> 'required|in:sim,nao',
            'data_parto'=> 'required|date',
            'exames'=>'required|in:vdrl,hbsag,hiv',
            'tabagismo'=> 'required|in:sim,nao',
            'etilismo'=> 'required|in:sim,nao',
            'drogas'=> 'required|in:sim,nao',
            'file' => 'required'
        ];
    }
}
