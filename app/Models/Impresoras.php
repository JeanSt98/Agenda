<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impresoras
 *
 * @property $id
 * @property $No
 * @property $Responsable
 * @property $Departamento
 * @property $Equipo
 * @property $Marca
 * @property $Modelo
 * @property $Serie_Impresora
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Impresoras extends Model
{
    
    static $rules = [
		'Responsable' => 'required',
		'Departamento' => 'required',
		'Equipo' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Serie_Impresora' => 'required',
    ];

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['No','Responsable','Departamento','Equipo','Marca','Modelo','Serie_Impresora'];



}
