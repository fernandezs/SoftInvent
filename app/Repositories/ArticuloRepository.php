<?php

namespace App\Repositories;

use App\Models\Articulo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticuloRepository
 * @package App\Repositories
 * @version May 6, 2018, 8:56 am CST
 *
 * @method Articulo findWithoutFail($id, $columns = ['*'])
 * @method Articulo find($id, $columns = ['*'])
 * @method Articulo first($columns = ['*'])
*/
class ArticuloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cod_articulo',
        'nombre',
        'descripcion',
        'marca',
        'precio_costo',
        'precio_venta',
        'cantidad',
        'cantidad_minima',
        'categoria_id',
        'foto',
        'estado'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Articulo::class;
    }
}
