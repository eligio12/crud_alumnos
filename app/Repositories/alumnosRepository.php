<?php

namespace App\Repositories;

use App\Models\alumnos;
use App\Repositories\BaseRepository;

/**
 * Class alumnosRepository
 * @package App\Repositories
 * @version November 6, 2020, 12:40 am UTC
*/

class alumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return alumnos::class;
    }
}
