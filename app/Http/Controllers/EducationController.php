<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $school = Education::where("id", $id)->first();
        return view('education', [ 'school' => $school,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([

            'time' => ['required','string', 'max:30'],
            'school'=>['required','string','max:99'],
            'diploma'=>['required','string','max:99'],
            'location'=>['required','string','max:99'],
          
        ]);

        Education::where("id", "$id")->update([
            'time' => $request->time,
            'school'=>$request->school,
            'diploma'=>$request->diploma,
            'location'=>$request->location,
            ]);


        return redirect()->action([DashboardController::class, 'index']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::where("id", $id)->first()->delete();
        return redirect()->action([DashboardController::class, 'index']);
    }
}
