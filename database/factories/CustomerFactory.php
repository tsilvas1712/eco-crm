<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cpf = $this->faker->randomNumber(3,true) . $this->faker->randomNumber(3,true).$this->faker->randomNumber(3,true).$this->faker->randomNumber(2,true);
        return [
            //
            'name' => $this->faker->name(),
            //'tenant_id' => rand(1,2),
            'cpf_cnpj' => $cpf,
            'gener'=> $this->faker->randomElement(['M','F']),
            'marital_status'=> $this->faker->randomElement(['C','S','D','U.E.']),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->streetAddress(),
            'number'=> $this->faker->randomNumber(4,false),
            'city' => $this->faker->city(),
            'zipcode' => $this->faker->randomNumber(9,true)

        ];
    }
}
