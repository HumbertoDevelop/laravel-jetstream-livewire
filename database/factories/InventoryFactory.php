<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Inventory::class;

    public function definition(): array
    {
        //

        $warehouse = Warehouse::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();
        return [
            'stock' => $this->faker->numberBetween($min = 1, $max = 1000),
            'product_id' => $warehouse->id,
            'warehouse_id' => $product->id,
        ];
    }
}
