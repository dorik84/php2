<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        [
            'name' => 'HTML,CSS,Sass,Bootstrap,JavaScript,JQuery',
            'desc' => 'Created several static web pages and single-page applications using HTML, CSS, Sass, Bootstrap, JQuery, JavaScript',
            'title'=> 'HTML,CSS,Sass,Bootstrap,JavaScript,JQuery'
        ],
        [
            'name' => 'Java',
            'desc' => 'Experienced in creating JAVA based applications as part of the curriculum ',
            'title'=> 'Java'
        ],
        [
            'name' => 'Python',
            'desc' => 'Gained practical skills in writing basic Python applications during study',
            'title'=> 'Python'
        ],
        [
            'name' => 'MySQL, MongoDB, Firestore',
            'desc' => 'Completed a variety of projects in database creation and querying data using SQL (MySQL, Oracle), NoSQL (MongoDB, Firestore) ',
            'title'=> 'MySQL, MongoDB, Firestore'
        ],
        [
            'name' => 'MongoDB,  ExpressJS, React-TypeScript, NodeJS',
            'desc' => 'Wrote few web apps based on MERN (MongoDB,  ExpressJS, React-TypeScript, NodeJS) as part of self learning',
            'title'=> 'MongoDB,  ExpressJS, React-TypeScript, NodeJS'
        ],
        [
            'name' => 'ASP.NET, C#',
            'desc' => 'Recieved practical experience in writing ASP.NET Core applications based on C# ',
            'title'=> 'ASP.NET, C#'
        ],
        [
            'name' => 'GitHub',
            'desc' => 'Utilized GitHub as a version control system for personal and team projects',
            'title'=> 'GitHub'
        ],
        [
            'name' => 'React-Native',
            'desc' => 'Developed an online store application based on React-Native as a front end',
            'title'=> 'React-Native'
        ],
        [
            'name' => 'Docker',
            'desc' => 'Deployed my Portfolio site using Docker',
            'title'=> 'Docker'
        ],
        [
            'name' => 'PHP',
            'desc' => 'Wrote a few web applications using PhP',
            'title'=> 'PHP'
        ],

        
        ]);
    }
}
