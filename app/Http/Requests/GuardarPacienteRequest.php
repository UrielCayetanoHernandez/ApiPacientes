<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                "nombres" => "requiere",
                "apellidos" => "requiere",
                "edad" => "requiere",
                "sexo" => "requiere",
                "rfc" => "requiere|unique:pacientes,rfc",
                "telefono" => "requiere",
                "correo" => "require",
                "direccion" => "requiere"
                
        ];
    }
}
