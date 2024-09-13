<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaguDaerah>
 */
class LaguDaerahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'pulau_id' => $this->faker->numberBetween(1, 6),
            'judul' => $this->faker->sentence(3),

            'provinsi' => $this->faker->state(),
            'ibukota' => $this->faker->city(),

            'lyrics' => $this->faker->sentence(20),
            'image_url' => 'https://picsum.photos/800/600',

        ];
    }
}
