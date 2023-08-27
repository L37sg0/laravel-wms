<?php

namespace App\Models\Inventory;

use App\Models\Inventory\AddressStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Address extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
