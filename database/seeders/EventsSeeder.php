<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([

            'name' => "Churchil Raw Edition",
            'price' => 10000,
            'seats' => 50,
            'rem' => 50,
            'description' => 'Join the Churchill Society of Metropolitan Chicago for its inaugural event recapping the recent International Churchill Society conference Date and time Wednesday, 8 December 2021 ...',
            'date' => '2022-01-01 12:20:15',
            'type_id' => 1,
        ]);
    }
}
