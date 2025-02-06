<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CreditCard;
use App\Models\Institution;
use App\Models\User;

class CreditCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CreditCard::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'brand' => fake()->regexify('[A-Za-z0-9]{50}'),
            'interest_rate' => fake()->randomFloat(2, 0, 999.99),
            'credit_limit' => fake()->randomFloat(2, 0, 9999999999.99),
            'balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'institution_id' => Institution::factory(),
        ];
    }
}
