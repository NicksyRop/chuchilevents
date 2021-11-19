<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Type;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array('VIP', 'Regular');

        foreach ( $types as $type){

            Type::create([

                'name' => $type
            ]);
        }

    }
}
