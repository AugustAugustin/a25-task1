<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    private static $lastId;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (!self::$lastId) {
            self::$lastId = Employee::orderBy('id', 'desc')->first()->id;
        }

        self::$lastId++;
        return [
            'email' => 'test' . self::$lastId,
            'password' => 'test' . self::$lastId,
        ];
    }
}
