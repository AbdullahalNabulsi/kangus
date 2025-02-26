<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'owner',
                'guard_name' => 'web',
                'created_at' => null,
                'updated_at' => null,
                'display_name' => null,
                'seeder_id' => 1,
                'ar' => [
                    'display_name' => 'المالك',
                ],
                'en' => [
                    'display_name' => 'Owner',
                ],
            ],
            [
                'name' => 'sales Manager',
                'guard_name' => 'web',
                'created_at' => null,
                'updated_at' => null,
                'seeder_id' => 2,
                'display_name' => null,
                'ar' => [
                    'display_name' => 'مدير المبيعات',
                ],
                'en' => [
                    'display_name' => 'Sales Manager',
                ],
            ],
            [
                'name' => 'trader',
                'guard_name' => 'mobile',
                'created_at' => null,
                'updated_at' => null,
                'seeder_id' => 3,
                'display_name' => null,
                'ar' => [
                    'display_name' => 'تاجر',
                ],
                'en' => [
                    'display_name' => 'Trader',
                ],
            ],
            [
                'name' => 'worker',
                'guard_name' => 'web',
                'created_at' => null,
                'updated_at' => null,
                'seeder_id' => 4,
                'display_name' => null,
                'ar' => [
                    'display_name' => 'عامل',
                ],
                'en' => [
                    'display_name' => 'Worker',
                ],
            ],
            [
                'name' => 'employee',
                'guard_name' => 'web',
                'created_at' => null,
                'updated_at' => null,
                'seeder_id' => 5,
                'display_name' => null,
                'ar' => [
                    'display_name' => 'موظف',
                ],
                'en' => [
                    'display_name' => 'Employee',
                ],
            ],
            [
                'name' => 'instructor',
                'guard_name' => 'web',
                'created_at' => null,
                'updated_at' => null,
                'seeder_id' => 6,
                'display_name' => null,
                'ar' => [
                    'display_name' => 'موظف',
                ],
                'en' => [
                    'display_name' => 'Instructor',
                ],
            ],
        ];

        $this->syncPosEmployeePermission();
    }

    public function setSeederIdToRoles($roles)
    {

        $existsRoles = DB::table('roles')->where('seeder_id', null)->get();

        foreach ($roles as $key1 => $role) {
            foreach ($existsRoles as $key2 => $existsRole) {
                $roleNames = is_array($existsRole->name) ? strtoupper($existsRole->name) : [strtoupper($existsRole->name)];
                if (in_array(strtoupper($role['name']), $roleNames)) {
                    DB::table('roles')->where('id', $existsRole->id)->update([
                        'seeder_id' => $role['seeder_id']
                    ]);
                    break;
                }
            }
        }
    }
    public function syncPosEmployeePermission()
    {

        $rolePosEmployee = DB::table('roles')->where('seeder_id', RolesEnum::EMPLOYEE_POS_SEEDER_ID)->first();
        if (!$rolePosEmployee)
            return;

        $permissions = $this->getPosEmployeePermission();

        foreach ($permissions as $key => $permission) {
            $role_has_permissions_exists = DB::table('role_has_permissions')
                ->where('permission_id', $permission->id)
                ->where('role_id', $rolePosEmployee->id)
                ->first();


            if (!$role_has_permissions_exists) {
                DB::table('role_has_permissions')->insert([
                    'permission_id' => $permission->id,
                    'role_id' => $rolePosEmployee->id,
                ]);
            }
        }
    }

    public function getPosEmployeePermission()
    {

        $permissions_names = (new RoleService)->getListPermissionsForPos();

        return DB::table('permissions')->whereIn('name', $permissions_names)->get();
    }
}
