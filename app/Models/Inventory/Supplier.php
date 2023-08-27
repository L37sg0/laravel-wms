<?php

namespace App\Models\Inventory;

use App\Models\Inventory\SupplierStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
