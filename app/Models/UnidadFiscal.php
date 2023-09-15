<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


/**
 * Class UnidadFiscal
 *
 * @property $id
 * @property $AMIE
 * @property $Nombre_Institucion
 * @property $Sostenimiento
 * @property $Parroquia
 * @property $Direccion
 * @property $Distrito
 * @property $Circuito
 * @property $Nombre_de_la_Autoridad
 * @property $Cedula_de_la_Autoridad
 * @property $Celular
 * @property $Correo_Institucional
 * @property $Telefono_Rectorado
 * @property $Email_Institucion
 * @property $Jornada
 * @property $Total_Estudiantes
 * @property $Total_Docentes_Institucion
 * @property $Nivel_que_oferta
 * @property $Tipo_de_educacion
 * @property $Jornadas
 * @property $Coordenadas_x
 * @property $Coordenadas_y
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UnidadFiscal extends Model
{
    
    static $rules = [
		'AMIE' => 'required',
		'Nombre_Institucion' => 'required',
		'Sostenimiento' => 'required',
		'Parroquia' => 'required',
		'Direccion' => 'required',
		'Distrito' => 'required',
		'Circuito' => 'required',
		'Nombre_de_la_Autoridad' => 'required',
		'Cedula_de_la_Autoridad' => 'required|cedula',
		'Celular' => 'required',
		'Correo_Institucional' => 'required',
		'Telefono_Rectorado' => 'required',
		'Email_Institucion' => 'required',
		'Jornada' => 'required',
		'Total_Estudiantes' => 'required',
		'Total_Docentes_Institucion' => 'required',
		'Nivel_que_oferta' => 'required',
		'Tipo_de_educacion' => 'required',
		'Jornadas' => 'required',
		'Coordenadas_x' => 'required',
		'Coordenadas_y' => 'required',
    ];

    protected $perPage = 1000;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['AMIE','Nombre_Institucion','Sostenimiento','Parroquia','Direccion','Distrito','Circuito','Nombre_de_la_Autoridad','Cedula_de_la_Autoridad','Celular','Correo_Institucional','Telefono_Rectorado','Email_Institucion','Jornada','Total_Estudiantes','Total_Docentes_Institucion','Nivel_que_oferta','Tipo_de_educacion','Jornadas','Coordenadas_x','Coordenadas_y'];



}
