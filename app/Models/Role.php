<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'code',
    ];

    public function getUser(){
        return $this->belongsToMany(User::class , 'role_users', 'user_id', 'role_id');
    }
    public function getPermission(){
        return $this->belongsToMany(Permission::class,'permission_roles');
    }

}
