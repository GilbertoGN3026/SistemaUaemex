<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Licenciatura
 *
 * @property $id
 * @property $nombre_licenciatura
 * @property $created_at
 * @property $updated_at
 *
 * @property Insumo[] $insumos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Licenciatura extends Model
{
    
    static $rules = [
		'nombre_licenciatura' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_licenciatura'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function insumos()
    {
        return $this->hasMany('App\Models\Insumo', 'licenciatura_id', 'id');
    }
    

}