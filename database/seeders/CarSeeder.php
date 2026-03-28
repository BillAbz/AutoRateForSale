<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'name' => 'BMW M4',
            'type' => 'Sports Coupe',
            'description' => 'I like this car because of its sporty design, performance, and elegant interior.',
        ]);

        Car::create([
            'name' => 'Audi RS6',
            'type' => 'Performance Wagon',
            'description' => 'The Audi RS6 combines speed, comfort, and practicality in one powerful car.',
        ]);

        Car::create([
            'name' => 'Porsche 911',
            'type' => 'Iconic Sports Car',
            'description' => 'The Porsche 911 is one of the most recognizable and timeless sports cars in the world.',
        ]);
    }
}