<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return[
            'Identificador Unico' => $this->id,
            'Nombres'=>Str::of($this->nombres)->upper(),
            'Apellidos'=>Str::of($this->apellidos)->upper(),
            'Edad' => $this->edad,
            'Sexo' => $this->sexo,
            'RFC' => $this->rfc,
            'Telefono' => $this->telefono,
            'Correo' => $this->correo,
            'Direccion' => $this->direccion,
            'Fecha de Alta' => $this->created_at->format('d-m-y'),
            'Fecha Modificada' => $this->updated_at->format('d-m-y')

        ];
    }
}
