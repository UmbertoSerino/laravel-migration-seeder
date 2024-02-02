<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'name_company' => 'SuperTrain!',
                'departure_station' => 'Wall Maria',
                'arrival_station' => 'Wall Sina',
                'departure_time' => '2024/02/03, 10:10',
                'arrival_time' => '2024/02/03, 10:15',
                'code_train' => '125032',
                'carriage_number' => '4',
                'on_time' => true,
                'cancellate' => false,
            ],
            [
                'name_company' => 'RyanTrain',
                'departure_station' => 'Santa Maria Capua Vetere',
                'arrival_station' => 'Parigi',
                'departure_time' => '2024/02/03, 10:10',
                'arrival_time' => '2024/02/04, 00:01',
                'code_train' => '125035',
                'carriage_number' => '1',
                'on_time' => true,
                'cancellate' => false,
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
            $liveTrain->cancellate = $train['cancellate'];
            $liveTrain->save();
        }
    }
}
