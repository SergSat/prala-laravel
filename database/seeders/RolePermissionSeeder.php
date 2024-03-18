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
        $all_permissions = [
            // Role
            'edit role', 'delete role', 'create role', 'view role',
            // Permission
            'edit permission', 'delete permission', 'create permission', 'view permission',
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // User
            'edit user', 'delete user', 'create user', 'view user',
        ];
        foreach ($all_permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $manager_permissions = [
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // User
            'edit user', 'create user', 'view user',
        ];

        $hr_permissions = [
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // User
            'edit user', 'create user', 'view user',
        ];

        $employee_permissions = [
            // Task
            'view task',
        ];
        // Create roles and assign created permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo($all_permissions);

        $editorRole = Role::create(['name' => 'manager']);
        $editorRole->givePermissionTo($manager_permissions);

        $viewerRole = Role::create(['name' => 'hr']);
        $viewerRole->givePermissionTo($hr_permissions);

        $viewerRole = Role::create(['name' => 'employee']);
        $viewerRole->givePermissionTo($employee_permissions);
    }
}
