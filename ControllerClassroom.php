<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;

class ControllerClassroom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Classroom::all();
        return view('classroom.reservation',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$users =Classroom::table('classrooms')->get();
        $data = Classroom::all()->where('statusClassroom', 'U');
        
        //$data = Classroom::all();
        return view('classroom.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'statusClassroom' => 'required',
            'nameClassroom' => 'required',
        ]);
        Classroom::create($request->all());
        return redirect('/classroom/create'); //go to previous page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'noClassroom' => 'required',
            'nameClassroom' => 'required',
            'statusClassroom' => 'required',
        ]);
        //Classroom::find($id)->update($request->all());
        Classroom::where('noClassroom', $id)->update([
            'statusClassroom' => $request->statusClassroom
        ]);
       // Classroom::where('noClassroom', '=', $id)->update($request->all());

        return redirect('/classroom');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Classroom::where('noClassroom', $id)->delete();
        return redirect('/classroom/create');
    }
}
