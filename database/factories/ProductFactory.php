<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'sku'=> $this->faker->unique()->numberBetween(100000, 999999),
            'name' =>$this->faker->sentence(2),
            'description' => $this->faker->text(200),
            // 'image_path'=> 'products/' . $this->faker->imageUrl('public/storage/products', 640, 480, null, false),
            // 'image_path'=> 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/' . $this->faker->numberBetween(1,999).'.png',
             'image_path' => 'products/' . basename(
                $this->faker->image(
                    storage_path('app/public/products'), 
                    640, 
                    480, 
                    null, 
                    false 
                )
            ),
            'price'=> $this->faker->randomFloat(2,1,1000),
            'subcategory_id' =>$this->faker->numberBetween(1,632),
        ];
    }
}
