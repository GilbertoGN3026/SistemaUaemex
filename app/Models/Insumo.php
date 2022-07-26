<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insumo
 *
 * @property $id
 * @property $user_nombre
 * @property $numero_cuenta
 * @property $aula
 * @property $fecha_horaEnt
 * @property $fecha_horaSol
 * @property $tipo_id
 * @property $numero_id
 * @property $licenciatura_id
 * @property $conformidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Licenciatura $licenciatura
 * @property Numero $numero
 * @property Tipo $tipo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insumo extends Model
{
    
    static $rules = [
		'user_nombre' => 'required',
		'numero_cuenta' => 'required',
		'aula' => 'required',
        'telefono' => 'required',
        'profesor' => 'required',
        'licenciatura_id' => 'required',
        'tipo_id' => 'required',
		'numero_id' => 'required',
        'fecha_horaSol' => 'required',
        'fecha_horaEnt' => 'required',
        'conformidad' => 'required',
		
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_nombre','numero_cuenta','aula','telefono','profesor','licenciatura_id','tipo_id','numero_id','fecha_horaSol','fecha_horaEnt','conformidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function licenciatura()
    {
        return $this->hasOne('App\Models\Licenciatura', 'id', 'licenciatura_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function numero()
    {
        return $this->hasOne('App\Models\Numero', 'id', 'numero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'nombre_completo', 'user_nombre');
    }
    

}