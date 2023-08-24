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
        $role1 = Role::create(['name'=> 'teamleader']);
        $role2 = Role::create(['name'=> 'editor']);
        $role3 = Role::create(['name'=> 'viewer']);
        $role4 = Role::create(['name'=> 'superteamleader']);

        Permission::create(['name' => 'admin.products.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.products.create'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.products.edit'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.products.destroy'])->syncRoles([$role1,$role4]);

        Permission::create(['name' => 'admin.shops.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.shops.create'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.shops.edit'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.shops.destroy'])->syncRoles([$role1,$role4]);


        Permission::create(['name' => 'admin.vendors.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.vendors.create'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.vendors.edit'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.vendors.destroy'])->syncRoles([$role1,$role4]);


        Permission::create(['name' => 'admin.warehouses.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.warehouses.create'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.warehouses.edit'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.warehouses.destroy'])->syncRoles([$role1,$role4]);

        Permission::create(['name' => 'admin.inventories.index'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.inventories.create'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.inventories.edit'])->syncRoles([$role1,$role4]);
        Permission::create(['name' => 'admin.inventories.destroy'])->syncRoles([$role1,$role4]);

        
    }
}
