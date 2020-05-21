<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  project::paginate(5);
        return view('home',compact('data'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $project = new project;
         $project->firstname= $request->firstname;
         $project->lastname=$request->lastname;
         $project->email=$request->email;
         $project->save();
         return redirect(route("home"))->with('successMsg','Student Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $all = project ::find($id);
       
        return view('edit',compact('all'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $project= project::find($id);

        $project->firstname=$request->firstname;
        $project->lastname=$request->lastname;
        $project->email=$request->email;
        

        $project->save();

        return redirect(route("home"))->with('successMsg','Student Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        project::find($id)->delete();
         return redirect(route("home"))->with('successMsg','Student Successfully Deleted');
    }
}
