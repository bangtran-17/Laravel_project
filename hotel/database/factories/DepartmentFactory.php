<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 * php artisan make:factory EmployeeFactory --model=Salary
 * php artisan tinker
 * App\Models\Department::factory()->count(10)->create();
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'DE_Name' => $this->faker->company,
            'DE_Description' => $this->faker->sentence,
            'DE_InitialSalary' => $this->faker->randomFloat(0,1000000,5000000),
            'Status' => $this->faker->randomElement(['Active', 'Inactive'])
            // Thêm các trường khác nếu cần
        ];
    }
}
