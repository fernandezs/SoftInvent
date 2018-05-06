<?php

namespace App\Repositories;

use App\Models\Reparacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReparacionRepository
 * @package App\Repositories
 * @version May 6, 2018, 8:58 am CST
 *
 * @method Reparacion findWithoutFail($id, $columns = ['*'])
 * @method Reparacion find($id, $columns = ['*'])
 * @method Reparacion first($columns = ['*'])
*/
class ReparacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'articulo_id',
        'costo_reparacion',
        'fecha_ingreso',
        'fecha_egreso',
        'descripcion',
        'garantia',
        'cliente_id',
        'empleado_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Reparacion::class;
    }
}
