<?php

namespace App\Repositories;

use App\Models\Repuesto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RepuestoRepository
 * @package App\Repositories
 * @version May 6, 2018, 6:07 am CST
 *
 * @method Repuesto findWithoutFail($id, $columns = ['*'])
 * @method Repuesto find($id, $columns = ['*'])
 * @method Repuesto first($columns = ['*'])
*/
class RepuestoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'codigo',
        'precio',
        'categoria_id',
        'tipo',
        'proveedor_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Repuesto::class;
    }
}
