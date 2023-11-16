<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgendamentoRequest extends FormRequest
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
            'ponto_coleta_id' => 'required|exists:ponto_coletas,id',
            'data' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'tipo_coleta' => 'required|in:domicilio,presencial',
            'nome' => 'required|string',
            'cpf' => ['required', 'string', 'max:14', 'min:11', 'regex:/^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}$/'],
            'telefone' => 'required|string',
            'email' => 'required|email',
            'endereco' => 'required|string',
        ];
    }
}
