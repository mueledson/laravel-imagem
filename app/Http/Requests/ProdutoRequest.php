<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O Campo Nome é Obrigatório',
            'descricao.required' => 'O Campo Descrição é Obrigatório',
            'img.required' => 'O Campo de Imagem é Obrigatório'
        ];
    }
}
