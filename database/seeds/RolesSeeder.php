<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $write = Role::create(['name' => 'write']);
        // $admin = Permission::create(['name' => 'admin.task.update'])->syncRoles([$admin, $write]);
        // $admin = Permission::create(['name' => 'admin.task.create'])->assignRole($admin);
        // $admin = Permission::create(['name' => 'admin.task.delete'])->assignRole($admin);
        // $admin = Permission::create(['name' => 'admin.task.show'])->assignRole($admin);

         Permission::create(['name' => 'admin.task.update'])->syncRoles([$admin, $write]);
         Permission::create(['name' => 'admin.task.create'])->assignRole($admin);
         Permission::create(['name' => 'admin.task.delete'])->assignRole($admin);
         Permission::create(['name' => 'admin.task.show'])->assignRole($admin);
    }
}
