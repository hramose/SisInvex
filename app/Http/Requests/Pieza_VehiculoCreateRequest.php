<?php

namespace SisInvex\Http\Requests;

use SisInvex\Http\Requests\Request;

class Pieza_VehiculoCreateRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'pieza_id'=>'required',
            'vehiculo_id'=>'required',
        ];
    }
}
