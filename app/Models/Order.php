<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Order
 * @package App\Models
 * @version October 29, 2021, 1:24 am UTC
 *
 * @property string $product
 * @property string $quantity
 * @property string $price
 * @property string|\Carbon\Carbon $time_of_dispatch
 * @property string|\Carbon\Carbon $time_of_arrival
 * @property string $name_of_handler
 * @property string $name_of_reciever
 */
class Order extends Model
{

    use HasFactory;

    public $table = 'orders_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product',
        'quantity',
        'price',
        'time_of_dispatch',
        'time_of_arrival',
        'name_of_handler',
        'name_of_reciever'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product' => 'string',
        'quantity' => 'string',
        'price' => 'string',
        'time_of_dispatch' => 'datetime',
        'time_of_arrival' => 'datetime',
        'name_of_handler' => 'string',
        'name_of_reciever' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product' => 'required|string|max:255',
        'quantity' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'time_of_dispatch' => 'required',
        'time_of_arrival' => 'required',
        'name_of_handler' => 'required|string|max:255',
        'name_of_reciever' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
