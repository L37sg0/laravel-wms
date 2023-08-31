<?php

namespace App\Models\RBAC;

use App\Models\RBAC\RoleStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function users()
    {
        return $this->belongsToMany(User::class, UserRole::TABLE_NAME);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, RolePermission::TABLE_NAME);
    }
}
