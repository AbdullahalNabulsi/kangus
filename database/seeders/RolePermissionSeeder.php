<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'product-list',
        'product-create',
        'product-edit',
        'product-delete'
    ];

    public function run(): void
    {

        $roles = DB::table('roles')->get();

        $role_has_permissions = DB::table('role_has_permissions')->get();

        foreach ($roles as $role) {
            if ($role->name == 'employee') {
                continue;
            }

            if ($role->name == 'owner' || $role->name == "general") {
                $permissions = DB::table('permissions')->get();
            } else {
                $permissions = DB::table('permissions')->leftJoin('permission_module', function ($join) {
                    $join->on('permission_module.permission_id', '=', 'permissions.id');
                })
                    ->where('module_id', $role->module_id)
                    ->select('permissions.id as id')
                    ->get();
            }

            foreach ($permissions as $permission) {
                $role_has_permissions_exists = $role_has_permissions
                    ->where('permission_id', $permission->id)
                    ->where('role_id', $role->id)
                    ->first();

                if (!$role_has_permissions_exists) {
                    DB::table('role_has_permissions')->insert([
                        'permission_id' => $permission->id,
                        'role_id' => $role->id,
                    ]);
                }
            }
        }
    }
}
