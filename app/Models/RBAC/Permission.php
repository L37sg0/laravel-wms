<?php

namespace App\Models\RBAC;

use App\Models\RBAC\PermissionStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
