<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finca
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Lote[] $lotes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Finca extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'fincas_id', 'id');
    }
    

}
