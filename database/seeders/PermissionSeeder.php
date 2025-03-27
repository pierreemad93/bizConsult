<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'service' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'feature' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'message' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'subscriber' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'testmonial' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'member' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'client' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'user' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'setting' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
            'role' => [
                'anyView',
                'view',
                'create',
                'edit',
                'delete'
            ],
        ];
        foreach ($permissions as $key => $actions) {
            foreach ($actions as $action) {
                $permission = $key . '-' . $action;
                Permission::updateOrCreate(
                    ['name' => $permission],
                    [
                        'name' => $permission,
                        'guard_name' => 'admin'
                    ]
                );
            }
        }
        $superAdminRole = Role::updateOrCreate(['name' => 'super admin'], ['name' => 'super admin', 'guard_name' => 'admin']);
        $superAdminRole->givePermissionTo(Permission::all());
    }
}
