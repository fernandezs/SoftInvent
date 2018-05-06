<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Repuesto
 * @package App\Models
 * @version May 6, 2018, 6:07 am CST
 *
 * @property \Illuminate\Database\Eloquent\Collection articuloProveedor
 * @property \Illuminate\Database\Eloquent\Collection optionUser
 * @property \Illuminate\Database\Eloquent\Collection rolUser
 * @property string nombre
 * @property integer codigo
 * @property decimal precio
 * @property integer categoria_id
 * @property string tipo
 * @property integer proveedor_id
 */
class Repuesto extends Model
{
    use SoftDeletes;

    public $table = 'repuestos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'codigo',
        'precio',
        'categoria_id',
        'tipo',
        'proveedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'codigo' => 'integer',
        'categoria_id' => 'integer',
        'tipo' => 'string',
        'proveedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
