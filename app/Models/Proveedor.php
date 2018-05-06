<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedor
 * @package App\Models
 * @version April 29, 2018, 7:21 pm CST
 *
 * @property \Illuminate\Database\Eloquent\Collection optionUser
 * @property \Illuminate\Database\Eloquent\Collection rolUser
 * @property string nombre
 * @property string nombre_contacto
 * @property string telefono
 * @property string pagina_web
 * @property string email
 * @property string domicilio
 * @property integer cod_postal
 */
class Proveedor extends Model
{
    use SoftDeletes;

    public $table = 'proveedores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'nombre_contacto',
        'telefono',
        'pagina_web',
        'email',
        'domicilio',
        'cod_postal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'nombre_contacto' => 'string',
        'telefono' => 'string',
        'pagina_web' => 'string',
        'email' => 'string',
        'domicilio' => 'string',
        'cod_postal' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|unique:proveedores,nombre',
        'telefono' => 'required'
        
    ];

    public function articulos(){
        return $this->belongsToMany(Articulo::class, 'articulo_proveedor');
    }

    
}
