<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
  
  public function definition(): array
  {
    return [
      'name' => fake()->sentence(),
      'is_completed' => rand(0, 1)
    ];
  }
}
