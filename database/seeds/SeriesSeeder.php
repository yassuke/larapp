<?php

use Illuminate\Database\Seeder;
use App\Models\SeriesModel;
use Carbon\Carbon;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $series = [
            [
                'id' => 1,
                'name' => 'Lost',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Agents of S.H.I.E.L.D',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Iron Fist',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Mr. Robot',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Grey\'s Anatomy',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Game of Thrones',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($series as $serie) {
            SeriesModel::create([
                'id' => $serie['id'],
                'name' => $serie['name'],
                'created_at' => $serie['created_at'],
                'updated_at' => $serie['updated_at']
            ]);
        }
    }
}
