<?php

namespace App\Models\Inventory\Product;

use App\Models\Inventory\Product\ProductStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
