<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LaptopDistrito
 *
 * @property $id
 * @property $No
 * @property $Responsable
 * @property $Departamento
 * @property $Equipo
 * @property $Marca
 * @property $Modelo
 * @property $Serie_Laptop
 * @property $Procesador
 * @property $Tarjeta_Madre
 * @property $Memoria_Ram
 * @property $Disco_Duro
 * @property $Unidad_Optica
 * @property $Sistema_Operativo
 * @property $Ip
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LaptopDistrito extends Model
{
    
    static $rules = [
		'No' => 'required',
		'Responsable' => 'required',
		'Departamento' => 'required',
		'Equipo' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Serie_Laptop' => 'required',
		'Procesador' => 'required',
		'Tarjeta_Madre' => 'required',
		'Memoria_Ram' => 'required',
		'Disco_Duro' => 'required',
		'Unidad_Optica' => 'required',
		'Sistema_Operativo' => 'required',
		'Ip' => 'required',
    ];

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['No','Responsable','Departamento','Equipo','Marca','Modelo','Serie_Laptop','Procesador','Tarjeta_Madre','Memoria_Ram','Disco_Duro','Unidad_Optica','Sistema_Operativo','Ip'];



}
