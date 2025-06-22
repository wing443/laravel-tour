<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BusinessFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->company;

        return [
            'title' => $title,
            'title_slug' => Str::slug($title),
            'slug' => Str::slug($title), // Чистый slug без случайных символов
            'description' => $this->faker->paragraph(3),
            'verified' => $this->faker->boolean(70),
            'image' => 'businesses/' . $this->faker->image('public/storage/businesses', 640, 480, 'business', false),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}