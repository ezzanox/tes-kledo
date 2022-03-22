<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status_id' => $this->faker->numberBetween(3, 4),
            'salary' => $this->faker->numberBetween(2000000, 10000000)
        ];
    }
}
