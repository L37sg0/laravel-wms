<?php

namespace App\Models\Inventory\Product;

use App\Models\Inventory\Product\ProductMetaStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMeta extends Model implements StaticData
{
    use HasFactory;

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
