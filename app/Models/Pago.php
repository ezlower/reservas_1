<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pago
 *
 * @property $id
 * @property $comprobante
 * @property $total_pago
 * @property $fecha_emision
 * @property $fecha_pago
 * @property $res_id
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Reserva $reserva
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    use SoftDeletes;

    static $rules = [
		'comprobante' => 'required',
		'total_pago' => 'required',
		'fecha_emision' => 'required',
		'fecha_pago' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comprobante','total_pago','fecha_emision','fecha_pago','res_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reserva()
    {
        return $this->hasOne('App\Models\Reserva', 'id', 'res_id');
    }
    

}
