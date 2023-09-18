<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role1 = Role::create(['name'=> 'admin']);

        Permission::create(['name' => 'admin.dashboard.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.students.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.students.destroy'])->assignRole($role1);

        Permission::create(['name' => 'admin.dates.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.dates.destroy'])->assignRole($role1);
        Permission::create(['name' => 'admin.dates.index'])->assignRole($role1);

        Permission::create(['name' => 'admin.schedules.index'])->assignRole($role1);
        Permission::create(['name' => 'admin.schedules.create'])->assignRole($role1);
        Permission::create(['name' => 'admin.schedules.edit'])->assignRole($role1);
        Permission::create(['name' => 'admin.schedules.destroy'])->assignRole($role1);

      
    }
}
