<?php

namespace App\Repositories\Reparaciones;

use App\Models\Reparaciones\Reparacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReparacionRepository
 * @package App\Repositories\Reparaciones
 * @version May 6, 2018, 11:04 am CST
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
