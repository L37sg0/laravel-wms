<?php

namespace App\Models\Inventory;

use App\Models\Inventory\CategoryStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
