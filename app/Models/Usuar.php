<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $id
 * @property $tipo_usuario
 * @property $created_at
 * @property $updated_at
 *
 * @property Computo[] $insumos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuar extends Model
{
    
    static $rules = [
		'tipo_usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function computos()
    {
        return $this->hasMany('App\Models\Computo', 'usuar_id', 'id');
    }
    

}