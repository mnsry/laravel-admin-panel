<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User\PersonalNumberVisit::create();
    }
}
