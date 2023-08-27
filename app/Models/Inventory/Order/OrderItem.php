<?php

namespace App\Models\Inventory\Order;

use App\Models\Inventory\Order\OrderItemStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
