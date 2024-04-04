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
    }
}
