<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => 29999,
            'state_id' => 62,
            'name' => 'La Paz',
            'county' => '',
            'latitude' => -16.4897,
            'longitude' => -68.1193
        ];
    }
}
