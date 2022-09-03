<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tagitem;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tagitem>
 */
class TagitemFactory extends Factory
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
