<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $permissions = $this->getPermissions();
        foreach ($permissions as $permission) {
            gate::define($permission->permission, function ($user) use ($permission) {
                $permissionIdsOfUser = $this->getPermissionIdsOfUser($user);
                  return in_array($permission->id ,$permissionIdsOfUser );
            });
        }
    }
    private function getPermissionIdsOfUser($user)
    {
        $cachePermissionUser = Cache::get("permissionIdsOfUser$user->id");
        // dd(Cache::get("permissionIdsOfUser$user->id"));

        if (is_null($cachePermissionUser)) {
            $roleIds = collect(DB::table('user_role')->where('user_id', $user->id)->get())->pluck('role_id')->toArray();
            $permissionIdsOfUser = collect(DB::table('permission_role')->whereIn('role_id', $roleIds)->get())->pluck('permission_id')->toArray();
            Cache::put("permissionIdsOfUser$user->id",  $permissionIdsOfUser,  $seconds = 3000);
            return $permissionIdsOfUser;
        } else {

            return  $cachePermissionUser;
        }
    }

    private function getPermissions()
    {
        $permission = Cache::get('permissionCache');

        if (is_null($permission)) {
            $permission =  Permission::all();
            Cache::put('permissionCache',  $permission, $seconds = 6000);
        }
        return $permission;
    }
}
