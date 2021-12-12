<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 *
 * @property $id
 * @property $num_hab
 * @property $piso
 * @property $descripsion
 * @property $carateristicas
 * @property $precio
 * @property $tipo_habitacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Room extends Model
{
    
    static $rules = [
		'num_hab' => 'required',
		'piso' => 'required',
		'descripsion' => 'required',
		'carateristicas' => 'required',
		'precio' => 'required',
		'tipo_habitacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_hab','piso','descripsion','carateristicas','precio','tipo_habitacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany('App\Models\Reserva', 'hab_id', 'id');
    }
    

}
