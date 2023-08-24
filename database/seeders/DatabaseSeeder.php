<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Inventory;
use App\Models\Price;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\Shop;
use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RoleSeeder::class);
        
        // Users = Vendors
        $this->call(UserSeeder::class);
        User::factory(11)->create();
        
        // Shop = Vendor_Shops
        Warehouse::factory(100)->create();
        Shop::factory(100)->create();
        ProductGroup::factory(30)->create();
        Product::factory(100)->create();
        Price::factory(100)->create();
        Inventory::factory(100)->create();
    }
}
