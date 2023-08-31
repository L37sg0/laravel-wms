<?php

namespace App\Models\RBAC;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\RBAC\UserStaticData as StaticData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements StaticData
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $hidden   = self::HIDDEN;
    protected $casts    = self::CASTS;

    public function roles() {
        return $this->belongsToMany(Role::class, UserRole::TABLE_NAME);
    }
}
