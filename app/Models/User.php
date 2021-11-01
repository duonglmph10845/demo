<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'avatar',
        'username',
        'email',
        'password',
        'address',
        'gender',
        'api_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getRoles()
    {
        return $this->belongsToMany(Role::class, 'user_role', 'user_id', 'role_id')->withTimestamps();
    }

    public function setPasswordAttribute($value)
    {
        $hashed = bcrypt($value);
        $this->attributes['password'] = $hashed;
    }
    
    // check quyền
    public function checkPermission($key_code)
    {
        // lấy tất cả các quyền của user đang login vào hệ thống
        $roles = Auth::user()->getRoles;
        foreach ($roles as $role) {
            $permissions = $role->getPermissions;
            if ($permissions->contains('key_code', $key_code)) {
                return true;
            }
        }
        return false;
        // so sánh giá trị đưa vào của route xem có tồn tại trong những quyền của user không
    }
}
