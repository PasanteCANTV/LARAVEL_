<?php

namespace Database\Factories;

use App\Models\Cuarto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CuartoFactory extends Factory
{
    protected $model = Cuarto::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'region' => $this->faker->name,
			'state' => $this->faker->name,
			'locality' => $this->faker->name,
        ];
    }
}
