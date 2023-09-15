<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EscanerDistrito
 *
 * @property $id
 * @property $No
 * @property $Responsable
 * @property $Departamento
 * @property $Equipo
 * @property $Marca
 * @property $Modelo
 * @property $Serie_Escaner
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EscanerDistrito extends Model
{
    
    static $rules = [
		'No' => 'required',
		'Responsable' => 'required',
		'Departamento' => 'required',
		'Equipo' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Serie_Escaner' => 'required',
    ];

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['No','Responsable','Departamento','Equipo','Marca','Modelo','Serie_Escaner'];



}
