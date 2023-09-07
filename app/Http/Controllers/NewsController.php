<?php

namespace App\Http\Controllers;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news=news::all();
        return view('admin1.news_update', ['news'=>$news]); 
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


        $news = new news();
        $news->news_heading = request("news_heading");
        $news->news_body = request("news_body");
        // if($request->hasFile('image_main')){
        //     $extension = $request->image_main->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_main->storeAs('/image',$filename);
        //     $news->image_main = $filename; 

        // }
        
        $news->save();
        return view('admin1.news_update'); 
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
        $news = news::find($id);
        return view('admin1.news_edit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        
        $news = news::find($id);

       
        

        $news->heading = request("news_heading");
        $news->content = request("news_body");
        // if($request->hasFile('image_main')){
        //     $extension = $request->image_main->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_main->storeAs('/image',$filename);
        //     $news->img = $filename; 

        // }
        
        $news->save();
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
