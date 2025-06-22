<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class BusinessTourSeeder extends Seeder
{
    public function run(): void
    {
        // Создаем 10 бизнесов
        $businesses = Business::factory()
            ->count(10)
            ->create();

        // Для каждого бизнеса создаем туры
        $businesses->each(function ($business) {
            Tour::factory()
                ->count(3)
                ->create(['business_id' => $business->id]);
        });
    }
}