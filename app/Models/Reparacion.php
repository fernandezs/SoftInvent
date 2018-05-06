<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reparacion
 * @package App\Models
 * @version May 6, 2018, 8:58 am CST
 *
 * @property \Illuminate\Database\Eloquent\Collection articuloProveedor
 * @property \Illuminate\Database\Eloquent\Collection optionUser
 * @property \Illuminate\Database\Eloquent\Collection rolUser
 * @property integer articulo_id
 * @property decimal costo_reparacion
 * @property string|\Carbon\Carbon fecha_ingreso
 * @property string|\Carbon\Carbon fecha_egreso
 * @property integer descripcion
 * @property integer garantia
 * @property integer cliente_id
 * @property integer empleado_id
 */
class Reparacion extends Model
{
    use SoftDeletes;

    public $table = 'reparaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'articulo_id' => 'integer',
        'descripcion' => 'string',
        'garantia' => 'integer',
        'cliente_id' => 'integer',
        'empleado_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
        
    ];

    
}
