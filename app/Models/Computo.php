<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Insumo
 *
 * @property $id
 * @property $nombre_completo
 * @property $numero_cuenta
 * @property $servicio_id
 * @property $numero_eie
 * @property $licenciatura_id
 * @property $usuar_id
 * @property $sugerencias
 * @property $created_at
 * @property $updated_at
 *
 * @property Licenciatura $licenciatura
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Computo extends Model
{
    static $rules = [
		'nombre_completo' => 'required',
		'numero_cuenta' => 'required',
		'servicio_id' => 'required',
        'numero_eie' => 'required',
        'licenciatura_id' => 'required',
        'usuar_id' => 'required',
		'sugerencias' => 'required',
		
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_completo','numero_cuenta','servicio_id','numero_eie','licenciatura_id','usuar_id','sugerencias'];

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
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'servicio_id');
    }
     /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuar()
    {
        return $this->hasOne('App\Models\Usuar', 'id', 'usuar_id');
    }
    use HasFactory;
}