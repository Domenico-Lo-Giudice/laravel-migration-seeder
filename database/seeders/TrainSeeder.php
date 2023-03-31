<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i = 19; $i++) {
            $newTrain = new Train;
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time = $faker->dateTimeBetween('+1 week', '+2 weeks');
            $newTrain->train_code = $faker->bothify('??##??');
            $newTrain->carriages = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->numberBetween(0, 1);
            $newTrain->canceled = $faker->numberBetween(0, 1);
            $newTrain->save();
    }
    }
}