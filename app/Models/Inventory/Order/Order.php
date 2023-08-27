<?php

namespace App\Models\Inventory\Order;

use App\Models\Inventory\Order\OrderStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
