<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tagproduct;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagproduct>
 */
class TagproductFactory extends Factory
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
