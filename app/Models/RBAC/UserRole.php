<?php

namespace App\Models\RBAC;

use Illuminate\Database\Eloquent\Model;
use App\Models\RBAC\UserRoleStaticData as StaticData;

class UserRole extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
