<?php

namespace App\Models\Inventory;

use App\Models\Inventory\BrandStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
