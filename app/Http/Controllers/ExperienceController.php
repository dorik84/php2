<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $work = Work::where("id", "$id")->first();
        return view('experience', [ 'work' => $work,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([

            'time' => ['required','string', 'max:30'],
            'company'=>['required','string','max:99'],
            'position'=>['required','string','max:99'],
            'desc'=>['required','string','max:255'],
            'location'=>['required','string','max:99'],
          
        ]);

        Work::where("id", "$id")->update([
            'time' => $request->time,
            'company'=>$request->company,
            'position'=>$request->position,
            'desc'=>$request->desc,
            'location'=>$request->location,
            ]);


        return redirect()->action([DashboardController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Work::where("id", "$id")->first()->delete();
        return redirect()->action([DashboardController::class, 'index']);
    }
}
