<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Cache\RateLimiting\Limit;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                'name_company' => 'SuperTrain!',
                'departure_station' => 'Wall Maria',
                'arrival_station' => 'Wall Sina',
                'departure_time' => '2024/02/03, 10:10',
                'arrival_time' => '2024/02/03, 10:15',
                'code_train' => 125032,
                'carriage_number' => '4',
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'name_company' => 'RyanTrain',
                'departure_station' => 'Santa Maria Capua Vetere',
                'arrival_station' => 'Parigi',
                'departure_time' => '2024/02/03, 10:10',
                'arrival_time' => '2024/02/04, 00:01',
                'code_train' => 125035,
                'carriage_number' => '1',
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'name_company' => 'Treni e non',
                'departure_station' => 'Reggio Calabria',
                'arrival_station' => 'San Candido',
                'departure_time' => '2024/02/03, 04:07',
                'arrival_time' => '2024/02/03, 23:01',
                'code_train' => 12505,
                'carriage_number' => '5',
                'on_time' => true,
                'cancelled' => false,
            ]
        ];

        foreach ($trains as $train) {
            $liveTrain = new Train();

            $liveTrain->name_company = $train['name_company'];
            $liveTrain->departure_station = $train['departure_station'];
            $liveTrain->arrival_station = $train['arrival_station'];
            $liveTrain->departure_time = $train['departure_time'];
            $liveTrain->arrival_time = $train['arrival_time'];
            $liveTrain->code_train = $train['code_train'];
            $liveTrain->carriage_number = $train['carriage_number'];
            $liveTrain->on_time = $train['on_time'];
            $liveTrain->cancelled = $train['cancelled'];
            $liveTrain->save();
        }

        for ($i = 0; $i < 47; $i++) {
            $liveTrain = new Train();

            $liveTrain->name_company = $faker->name();
            $liveTrain->departure_station = $faker->city();
            $liveTrain->arrival_station = $faker->city();
            $liveTrain->departure_time = $faker->dateTimeBetween('now', '+10 minutes');
            $liveTrain->arrival_time = $faker->dateTimeBetween('-1 week', '+3 days');
            $liveTrain->code_train = $faker->unique()->randomNumber(6);
            $liveTrain->carriage_number = $faker->numberBetween(1, 4);
            $liveTrain->on_time = $faker->boolean(40);
            $liveTrain->cancelled = $faker->boolean(15);
            $liveTrain->save();
        }
    }
}
