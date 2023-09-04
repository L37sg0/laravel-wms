<?php

namespace Database\Factories\Inventory\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Order\OrderAddress as Model;

class OrderAddressFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [];
    }
}
