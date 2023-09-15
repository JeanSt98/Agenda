<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


/**
 * Class UnidadPrivadaFiscomisional
 *
 * @property $id
 * @property $AMIE
 * @property $Nombre_Institucion
 * @property $Sostenimiento
 * @property $Nivel_que_oferta
 * @property $Correo_Institucional
 * @property $Correo_Institucional_Alterno
 * @property $Direccion
 * @property $Parroquia
 * @property $Cedula_de_la_Autoridad_P
 * @property $Nombre_de_la_Autoridad_P
 * @property $Fecha_de_Nacimiento_A_P
 * @property $Celular_A_P
 * @property $Telefono_Convencional_A_P
 * @property $Correo_Personal_Autoridad_P
 * @property $Direccion_Domicilio
 * @property $Cedula_de_la_Autoridad_S
 * @property $Nombre_de_la_Autoridad_S
 * @property $Fecha_de_Nacimiento_A_S
 * @property $Celular_A_S
 * @property $Telefono_Convencional_A_S
 * @property $Correo_Personal_Autoridad_S
 * @property $Direccion_Domicilio_A_S
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UnidadPrivadaFiscomisional extends Model
{
    
    static $rules = [
		'AMIE' => 'required',
		'Nombre_Institucion' => 'required',
		'Sostenimiento' => 'required',
		'Nivel_que_oferta' => 'required',
		'Correo_Institucional' => 'required',
		'Correo_Institucional_Alterno' => 'required',
		'Direccion' => 'required',
		'Parroquia' => 'required',
		'Cedula_de_la_Autoridad_P' => 'required|cedula',
		'Nombre_de_la_Autoridad_P' => 'required',
		'Fecha_de_Nacimiento_A_P' => 'required',
		'Celular_A_P' => 'required',
		'Telefono_Convencional_A_P' => 'required',
		'Correo_Personal_Autoridad_P' => 'required',
		'Direccion_Domicilio' => 'required',
		'Cedula_de_la_Autoridad_S' => 'required|cedula',
		'Nombre_de_la_Autoridad_S' => 'required',
		'Fecha_de_Nacimiento_A_S' => 'required',
		'Celular_A_S' => 'required',
		'Telefono_Convencional_A_S' => 'required',
		'Correo_Personal_Autoridad_S' => 'required',
		'Direccion_Domicilio_A_S' => 'required',
    ];

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['AMIE','Nombre_Institucion','Sostenimiento','Nivel_que_oferta','Correo_Institucional','Correo_Institucional_Alterno','Direccion','Parroquia','Cedula_de_la_Autoridad_P','Nombre_de_la_Autoridad_P','Fecha_de_Nacimiento_A_P','Celular_A_P','Telefono_Convencional_A_P','Correo_Personal_Autoridad_P','Direccion_Domicilio','Cedula_de_la_Autoridad_S','Nombre_de_la_Autoridad_S','Fecha_de_Nacimiento_A_S','Celular_A_S','Telefono_Convencional_A_S','Correo_Personal_Autoridad_S','Direccion_Domicilio_A_S'];



}
