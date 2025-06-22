<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TourFactory extends Factory
{
    public function definition()
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'request_slug' => Str::slug($title), // Генерируем корректный slug
            'description' => $this->faker->paragraphs(3, true),
            'business_id' => Business::factory(),
            'available_places' => $this->faker->numberBetween(5, 50),
            'date_start' => $this->faker->dateTimeBetween('now', '+1 year'), // DateTime объект
            'date_end' => $this->faker->dateTimeBetween('+1 year', '+2 years'),
            'image' => 'tours/' . $this->faker->image('public/storage/tours', 800, 600, 'travel', false),
        ];
    }
}