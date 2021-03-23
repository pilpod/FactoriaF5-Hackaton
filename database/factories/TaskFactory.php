<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'hour' => $this->faker->time,
            'date' => $this->faker->date,
            'advice' => $this->faker->text,
            'end_message' => $this->faker->text,
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
