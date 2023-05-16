<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Abonnes>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom'=> $this->faker->name(),
            'prenom'=> $this->faker->name(),
            'age'=> rand(1,20),
            'sexe'=> Str::upper(Str::random(1)),
            'profession'=> Str::upper(Str::random(9)),
            'rue'=> Str::upper(Str::random(9)),
            'code postal' => Str::upper(Str::random(9)),
            'ville' => Str::upper(Str::random(9)),
            'paye'=> Str::upper(Str::random(9)),
            'telephone'=> rand(690000000,699999999),
            'email'=> $this->faker->email(),
            'id_motivation'=> rand(1,40),
        ];
    }
}
