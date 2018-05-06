<?php

namespace App\Http\Requests\Reparaciones;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Reparaciones\Reparacion;

class UpdateReparacionRequest extends FormRequest
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
    public function rules(){
        $id = $this->reparacion;
        $rules = Reparacion::$rules;
        //$rules['campo'] = $rules['campo'] . ',campo,' . $id;

        return $rules;
    }
}
