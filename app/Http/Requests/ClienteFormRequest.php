<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome' => 'required|max:120|min:5 ',
            'telefone' => 'required|max:120|min:5 ',
            'endereco' => 'required|max:120|min:5 ',
            'email' => 'required|max:120|min:5 ',
            'password' => 'required|max:120|min:5 ',
        ];

        return [
        'nome.required' => "O campo nome é obrigatorio",
        'nome.max' => 'O campo nome deve conter no máximo 120 caracteres',
        'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',

        'telefone.required' => 'telefone obrigatorio',
        'telefone.max' => 'telefone deve conter no maximo 11 caracteres',
        'telefone.min' => 'telefone deve conter no minimo 10 caracteres',

        'email.required' => 'Email obrigatorio',
        'email.max' => 'O campo e-mail deve conter no máximo 120 caracteres',
        'email.email' => 'Formato de email invalido',
        'email.unique' => 'E-mail já cadastrado',

        'cpf.required' => 'CPF obrigatório',
        'cpf.max' => 'CPF deve conter no máximo 11 caracteres',
        'cpf.min' => 'CPF deve conter no mínimo 11 caracteres',
        'cpf.unique' => 'CPF Já cadastrado no sistema',

        'endereco.required' => 'endereco obrigatório',
        'endereco.max' => 'O campo endereco deve conter no máximo 120 caracteres',
        
        'password.required' => 'password obrigatoria'
    ];
    }
}
