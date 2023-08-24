<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Price::class;
    public function definition(): array
    {
        $shop = Shop::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            //
            'product_id' => $shop->id,
            'shop_id' => $product->id,
            'sale_price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99999999),
        ];
    }
}
