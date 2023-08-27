<?php

namespace App\Models\RBAC;

use Illuminate\Database\Eloquent\Model;
use App\Models\RBAC\RolePermissionStaticData as StaticData;

class RolePermission extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
