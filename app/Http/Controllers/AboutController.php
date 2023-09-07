<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\about_as;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about_as=about_as::find($id);
        return view('admin1.about_as',['about_as'=>$about_as]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $about_as = about_as::find(1);
        $about_as->first_paraagraph = request("first_paraagraph");
        $about_as->content = request("content");
        $about_as->mission = request("mission");
        $about_as->vision = request("vision");
        $about_as->quality_policy = request("quality_policy");
        $about_as->our_objective = request("our_objective");
        $about_as->our_values = request("our_values");
        $about_as->save();
       return redirect('admin1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
