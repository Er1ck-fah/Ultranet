<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition(): array
    {
        return [
            ['id' => 1, 'name_module' => 'Devis', 'class' => 'text-bg-primary ', 'icon' => 'bi bi-list-columns'],
            ['id' => 2, 'name_module' => 'Transactions', 'class' => 'text-bg-danger', 'icon' => 'bi bi-cash-stack'],
            ['id' => 3, 'name_module' => 'Taches', 'class' => 'text-bg-success', 'icon' => 'bi bi-tags'],
            ['id' => 4, 'name_module' => 'Magasins', 'class' => 'text-bg-info', 'icon' => 'bi bi-boxes'],
            ['id' => 5, 'name_module' => 'Fournisseurs', 'class' => 'text-bg-warning', 'icon' => 'bi bi-truck'],
            ['id' => 6, 'name_module' => 'Settings', 'class' => 'text-bg-danger', 'icon' => 'bi bi-house-gear-fill'],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
