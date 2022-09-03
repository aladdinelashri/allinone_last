<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Coloroption;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coloroption>
 */
class ColoroptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Title' => '----',
        ];
    }
}
