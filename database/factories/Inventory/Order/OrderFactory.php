<?php

namespace Database\Factories\Inventory\Order;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Order\Order as Model;

class OrderFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Model::FIELD_TYPE           => '',
            Model::FIELD_STATUS         => '',
            Model::FIELD_SUB_TOTAL      => '',
            Model::FIELD_ITEM_DISCOUNT  => '',
            Model::FIELD_TAX            => '',
            Model::FIELD_SHIPPING       => '',
            Model::FIELD_TOTAL          => '',
            Model::FIELD_PROMO          => '',
            Model::FIELD_DISCOUNT       => '',
            Model::FIELD_GRAND_TOTAL    => '',
            Model::FIELD_CONTENT        => '',
        ];
    }
}
