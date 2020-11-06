<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class alumnos
 * @package App\Models
 * @version November 6, 2020, 12:40 am UTC
 *
 * @property string $nombre
 * @property string $password
 * @property string $codigo
 * @property string $correo
 * @property string $carrera
 * @property string $Fecha_ingreso
 * @property string $centro
 * @property string $sexo
 */
class alumnos extends Model
{
    use SoftDeletes;

    public $table = 'alumnos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'password',
        'codigo',
        'correo',
        'carrera',
        'Fecha_ingreso',
        'centro',
        'sexo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'password' => 'string',
        'codigo' => 'string',
        'correo' => 'string',
        'carrera' => 'string',
        'Fecha_ingreso' => 'string',
        'centro' => 'string',
        'sexo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'password' => 'required',
        'codigo' => 'numeric|required',
        'correo' => 'email',
        'Fecha_ingreso' => 'required',
        'centro' => 'required',
        'sexo' => 'required'
    ];

    
}
