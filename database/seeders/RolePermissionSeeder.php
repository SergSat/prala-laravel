<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        $permissions = ['edit task', 'delete task', 'create task', 'view task'];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign created permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo($permissions);

        $editorRole = Role::create(['name' => 'editor']);
        $editorRole->givePermissionTo(['edit task', 'create task', 'view task']);

        $viewerRole = Role::create(['name' => 'viewer']);
        $viewerRole->givePermissionTo(['view task']);
    }
}
