<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([[
            'time' => 'Sep 2019 - Present',
            'school' => 'Nova Scotia Community College',
            'diploma' => 'IT Web Programming',
            'location' => 'Truro, NS',
            'title'=> 'IT Web Programming'
        ],
        [
            'time' => 'Jun 2014 – Dec 2016',
            'school' => 'Zolochiv College of Lviv National Agrarian University',
            'diploma' => 'Livestock Products Production and Processing',
            'location' => 'Zolochiv, Ukraine',
            'title'=> 'Livestock Products Production and Processing'
        ],
        [
            'time' => 'Sep 2002 – Jun 2007',
            'school' => 'Cherkasy State Technological University',
            'diploma' => 'Master’s Diploma Finance',
            'location' => 'Cherkasy, Ukraine',
            'title'=> 'Master’s Diploma Finance'
        ],
        ]);
    }
}
