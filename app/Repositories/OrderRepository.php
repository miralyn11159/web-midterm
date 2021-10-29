<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\BaseRepository;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version October 29, 2021, 1:24 am UTC
*/

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product',
        'quantity',
        'price',
        'time_of_dispatch',
        'time_of_arrival',
        'name_of_handler',
        'name_of_reciever'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
