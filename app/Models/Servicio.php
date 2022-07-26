<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $id
 * @property $nombre_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @property Computo[] $insumos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'nombre_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_servicio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computos()
    {
        return $this->hasMany('App\Models\Computo', 'servicio_id', 'id');
    }
    

}