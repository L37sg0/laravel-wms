<?php

namespace App\Models\Inventory;

use App\Models\Inventory\TransactionStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
