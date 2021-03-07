<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Quality;
use App\Models\ResumeBuilds;

class DashboardController extends Controller
{
    function index() 
    {
        $education = Education::all();
        $experience = Work::all();
        $skills = Skill::all();
        $qualities = Quality::all();

        return view('dashboard', 
        [
            'education' => $education,
            'experience' => $experience,
            'skills' => $skills,
            'qualities' => $qualities,
        ]
        );
    }


    function builds() 
    {
        $builds = ResumeBuilds::all();

        
        return view('builds', 
        [
            'builds' => $builds,

        ]
        );
    }








    
}
