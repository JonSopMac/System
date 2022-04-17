<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $usuarios_id
 * @property $fecha
 * @property $linea
 * @property $palma
 * @property $enfermedads_id
 * @property $lotes_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Enfermedad $enfermedad
 * @property Lote $lote
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'usuarios_id' => 'required',
		'fecha' => 'required',
		'linea' => 'required',
		'palma' => 'required',
		'enfermedads_id' => 'required',
		'lotes_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuarios_id','fecha','linea','palma','enfermedads_id','lotes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function enfermedad()
    {
        return $this->hasOne('App\Models\Enfermedad', 'id', 'enfermedads_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lote()
    {
        return $this->hasOne('App\Models\Lote', 'id', 'lotes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuarios_id');
    }
    

}
