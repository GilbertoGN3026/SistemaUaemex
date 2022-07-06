<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Numero
 *
 * @property $id
 * @property $numero
 * @property $created_at
 * @property $updated_at
 *
 * @property Insumo[] $insumos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Numero extends Model
{
    
    static $rules = [
		'numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insumos()
    {
        return $this->hasMany('App\Models\Insumo', 'numero_id', 'id');
    }
    

}