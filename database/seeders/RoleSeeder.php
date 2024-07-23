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

        $existsRoles = DB::table('roles')->where('seeder_id', null)->get();
        foreach ($roles as $key => $role) {
            if (in_array($role['seeder_id'], $existsRoles->toArray())) {
                continue;
            }

            $roleId = DB::table('roles')->insertGetId([
                'seeder_id' => $role['seeder_id'],
                'name' => $role['name'],
                'guard_name' => $role['guard_name'],
                'module_id' => $role['module_id'],
            ]);

            DB::table('role_translations')->insert([
                [
                    'role_id' => $roleId,
                    'locale' => 'en',
                    'display_name' => $role['en']['display_name'],
                ], [
                    'role_id' => $roleId,
                    'locale' => 'ar',
                    'display_name' => $role['ar']['display_name'],
                ],
            ]);
        }
    }
}
