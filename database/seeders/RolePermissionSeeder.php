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
            // Profession
            'edit profession', 'delete profession', 'create profession', 'view profession',
            // News
            'edit news', 'delete news', 'create news', 'view news',
            // Poll
            'edit poll', 'delete poll', 'create poll', 'view poll',
            // Qualification
            'edit qualification', 'delete qualification', 'create qualification', 'view qualification',
            // QualificationCategory
            'edit qualification_category', 'delete qualification_category', 'create qualification_category', 'view qualification_category',
        ];
        foreach ($all_permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $admin_permissions = [
            // Role
            'view role',
            // Permission
            'view permission',
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // User
            'edit user', 'delete user', 'create user', 'view user',
            // Profession
            'edit profession', 'delete profession', 'create profession', 'view profession',
            // News
            'edit news', 'delete news', 'create news', 'view news',
            // Poll
            'edit poll', 'delete poll', 'create poll', 'view poll',
            // Qualification
            'edit qualification', 'delete qualification', 'create qualification', 'view qualification',
            // QualificationCategory
            'edit qualification_category', 'delete qualification_category', 'create qualification_category', 'view qualification_category',
        ];

        $manager_permissions = [
            // User
            'edit user', 'create user', 'view user',
            // Profession
            'edit profession', 'delete profession', 'create profession', 'view profession',
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // News
            'edit news', 'delete news', 'create news', 'view news',
            // Poll
            'edit poll', 'delete poll', 'create poll', 'view poll',
            // Qualification
            'edit qualification', 'delete qualification', 'create qualification', 'view qualification',
            // QualificationCategory
            'edit qualification_category', 'delete qualification_category', 'create qualification_category', 'view qualification_category',
        ];

        $hr_permissions = [
            // User
            'edit user', 'create user', 'view user',
            // Task
            'edit task', 'delete task', 'create task', 'view task',
            // Profession
            'edit profession', 'delete profession', 'create profession', 'view profession',
            // News
            'view news',
            // Poll
            'view poll',
            // Qualification
            'view qualification',
            // QualificationCategory
            'view qualification_category',
        ];

        $employee_permissions = [
            // User
            'view user',
            // Profession
            'view profession',
            // Task
            'view task',
            // News
            'view news',
            // Poll
            'view poll',
            // Qualification
            'view qualification',
            // QualificationCategory
            'view qualification_category',
        ];

        // Create roles and assign created permissions
        $superAdminRole = Role::create(['name' => 'super-admin']);
        $superAdminRole->givePermissionTo($all_permissions);

        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo($admin_permissions);

        $managerRole = Role::create(['name' => 'manager']);
        $managerRole->givePermissionTo($manager_permissions);

        $hrRole = Role::create(['name' => 'hr']);
        $hrRole->givePermissionTo($hr_permissions);

        $employeeRole = Role::create(['name' => 'employee']);
        $employeeRole->givePermissionTo($employee_permissions);
    }
}
