<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product' => $this->faker->word,
        'quantity' => $this->faker->word,
        'price' => $this->faker->word,
        'time_of_dispatch' => $this->faker->date('Y-m-d H:i:s'),
        'time_of_arrival' => $this->faker->date('Y-m-d H:i:s'),
        'name_of_handler' => $this->faker->word,
        'name_of_reciever' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
