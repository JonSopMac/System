<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lote
 *
 * @property $id
 * @property $nombre
 * @property $anio_siembra
 * @property $variedads_id
 * @property $fincas_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Finca $finca
 * @property Registro[] $registros
 * @property Variedad $variedad
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lote extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'anio_siembra' => 'required',
		'variedads_id' => 'required',
		'fincas_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','anio_siembra','variedads_id','fincas_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function finca()
    {
        return $this->hasOne('App\Models\Finca', 'id', 'fincas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registros()
    {
        return $this->hasMany('App\Models\Registro', 'lotes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variedad()
    {
        return $this->hasOne('App\Models\Variedad', 'id', 'variedads_id');
    }
    

}
