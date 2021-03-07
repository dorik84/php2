<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qualities')->insert([
        [
            'name' => 'continuous learning',
            'desc' => 'Inclined to continuous learning',
            'title'=> 'continuous learning'
        ],
        [
            'name' => 'Self-motivated',
            'desc' => 'Self-motivated, team oriented but able to work
            independently',
            'title'=> 'Self-motivated'
        ],
        [
            'name' => 'details',
            'desc' => 'Excellent attention to details',
            'title'=> 'details'
        ],
        [
            'name' => 'multitasking',
            'desc' => 'Ability to manage several projects simultaneously',
            'title'=> 'multitasking'
        ],
        [
            'name' => 'languages',
            'desc' => 'Languages: Ukrainian, Russian, English',
            'title'=> 'languages'
        ],
     
        ]);
    }
}
