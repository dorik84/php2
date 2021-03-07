<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Work;
use App\Models\Skill;
use App\Models\Quality;
use App\Models\ResumeBuilds;

class HomeController extends Controller
{
    function index() 
    {
        $schools = Education::all();
        $experience = Work::all();
        $skills = Skill::all();
        $qualities = Quality::all();
        return view('home', ['education' => $schools, 'experience'=> $experience, 'skills'=> $skills, 'qualities'=> $qualities]);
    
    }


    function generate(Request $request) 
    {

        $validated = $request->validate([
            'name' => ['required', 'max:30'],
            'email' => ['required', 'max:30', 'email:rfc,dns'],
            'education.*'=>['integer','max:99'],
            'experience.*'=>['integer','max:99'],
            'skill.*'=>['integer','max:99'],
            'quality.*'=>['integer','max:99'],
        ]);


        $educ_list = $request->has('education') ? Education::whereIn('id', $request['education'])->get() : null;
        $exp_list = $request->has('experience') ? Work::whereIn('id', $request['experience'])->get() : null;
        $skill_list = $request->has('skill') ? Skill::whereIn('id', $request['skill'])->get() : null;
        $qual_list = $request->has('quality') ? Quality::whereIn('id', $request['quality'])->get() : null;

        //======================================================= save resume build
        $options = [
            'educ_list'=>$educ_list,
            'exp_list'=>$exp_list,
            'skill_list'=>$skill_list,
            'qual_list'=>$qual_list,
        ];


        $build = ResumeBuilds::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'options' =>  json_encode($options),
        ]);

        $build->save();


 

        return view('resume', ['data' => $options] );
    }
}
