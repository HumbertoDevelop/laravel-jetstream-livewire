<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition()
    {
        $shop = Shop::inRandomOrder()->first();
        $vendor = User::inRandomOrder()->first();
        $productGroup = ProductGroup::inRandomOrder()->first();

        return [
            'product_name' => $this->faker->name(),
            'description_name' => $this->faker->sentence(),
            'sku' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'vendor_id' => $vendor->id,
            'shop_id' => $shop->id,
            'product_group_id' => $productGroup->id,
        ];
    }
}
