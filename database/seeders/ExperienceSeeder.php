<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
        [
            'time' => 'Jan 2021 – present',
            'company' => 'Nova Scotia Community College',
            'position' => 'Peer Assisted Learning Supports (PALS) Team Member',
            'location' => 'Truro, NS',
            'desc'=>'Collaborate with fellow students in a professional learning environment and provide group support on a variety of topics/subjects.',
            'title'=> 'Peer Assisted Learning Supports (PALS) Team Member'
        ],
        [
            'time' => 'May 2020 – June 2020',
            'company' => 'StFX University',
            'position' => 'Workterm (Remote)',
            'location' => 'Truro, NS',
            'desc'=>'Provided the content migration of the university websites from Drupal 7 to Drupal 8 as part of a team.',
            'title'=> 'Workterm (Remote)'
        ],
        [
            'time' => 'Sep 2014 – Sep 2019',
            'company' => 'Dierent Employers',
            'position' => 'Farm Worker',
            'location' => 'Ukraine, Denmark, NS Canada',
            'desc'=>'',
            'title'=> 'Farm Worker'
        ],
        [
            'time' => 'Nov 2010 – Mar 2014',
            'company' => 'Self Employed',
            'position' => 'Retail',
            'location' => 'Cherkasy, Ukraine',
            'desc'=>'Sale on dierent web trading platforms\nResearch of market needs and supply\nProvide logistics, restocking, advertising',
            'title'=> 'Retail'
        ],
        [
            'time' => 'Oct 2009 – Nov 2010',
            'company' => 'Loan Association, Fortetsia',
            'position' => 'Credit Specialist',
            'location' => 'Cherkasy, Ukraine',
            'desc'=>'Risks assessment\nEvaluate customer records and recommend payment plans\nConfer with credit association to exchange credit information\nComplete loan applications and submit to loan committees for approval',
            'title' => 'Credit Specialist',
        ],
        [
            'time' => 'Jul 2007 – Feb 2008',
            'company' => 'Pershe Travnya',
            'position' => 'Business Development Finance Specialist',
            'location' => 'Cherkasy, Ukraine',
            'desc'=>'Analyze monthly department budgeting to maintain expenditure controls\nSubmit recommendations for funds disposal',
            'title' => 'Business Development Finance Specialist',
        ],

        
        ]);
    }
    
}
