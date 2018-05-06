<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Articulo
 * @package App\Models
 * @version May 6, 2018, 8:56 am CST
 *
 * @property \Illuminate\Database\Eloquent\Collection ArticuloProveedor
 * @property \Illuminate\Database\Eloquent\Collection optionUser
 * @property \Illuminate\Database\Eloquent\Collection rolUser
 * @property integer cod_articulo
 * @property string nombre
 * @property string descripcion
 * @property string marca
 * @property decimal precio_costo
 * @property decimal precio_venta
 * @property integer cantidad
 * @property integer cantidad_minima
 * @property integer categoria_id
 * @property string foto
 * @property string estado
 */
class Articulo extends Model
{
    use SoftDeletes;

    public $table = 'articulos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cod_articulo' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'marca' => 'string',
        'cantidad' => 'integer',
        'cantidad_minima' => 'integer',
        'categoria_id' => 'integer',
        'foto' => 'string',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function proveedores()
    {
        return $this->belongsToMany(Proveedor::class, 'articulo_proveedor');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
