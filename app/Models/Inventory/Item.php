<?php

namespace App\Models\Inventory;

use App\Models\Inventory\ItemStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
