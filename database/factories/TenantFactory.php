<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cnpj = $this->faker->randomNumber(2,true).$this->faker->randomNumber(3,true) . $this->faker->randomNumber(3,true).'0001'.$this->faker->randomNumber(2,true);
        $days = rand(1,31);
        return [
            //
            'name' => $this->faker->name(),
            'cpf_cnpj' => $cnpj,
            //'phone' => $this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'url'=>$this->faker->url(),
            //'active' => True,
            'subscription' => now(),
            'expires_at' => now()->addDays($days),
        ];
    }
}
