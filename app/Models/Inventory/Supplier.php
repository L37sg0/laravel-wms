<?php

namespace App\Models\Inventory;

use App\Models\Inventory\SupplierStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
