<?php

namespace App\Models\RBAC;

use App\Models\RBAC\PermissionStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function roles()
    {
        return $this->belongsToMany(Role::class, RolePermission::TABLE_NAME);
    }
}
