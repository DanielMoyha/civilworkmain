<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
            [
                'name' => fake()->name(),
                'username' => $this->faker->unique()->userName(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'phone' => $this->faker->numerify('########'),
                'address' => fake()->streetAddress(),
                'is_active' => fake()->numberBetween(0,1),
                // 'city_id' => fake()->numberBetween(30000, 30338),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'created_at' => $this->faker->dateTimeThisYear('+11 months'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $a = $this->faker->randomElement(['Construcción','Estudios', 'Supervisión']);
            $user->assignRole($a);
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
