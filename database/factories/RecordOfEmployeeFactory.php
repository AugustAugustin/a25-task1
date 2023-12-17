<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\RecordOfEmployee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\recordOfEmployee>
 */
class RecordOfEmployeeFactory extends Factory
{
    protected $model = RecordOfEmployee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::get()->random()->id,
            'hours' =>  rand(1, 12),
        ];
    }
}
