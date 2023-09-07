<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin1.service_insert');    
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

       $services = new services();
       $services->service_heading = request("service_heading");
       $services->service_index_body = request("service_index_body");
    //    $services->service_body = request("service_body");
    //    $services->image_main = "wekwfhlkwfhjlkfj";
        // if($request->hasFile('image_main')){
        //     $extension = $request->image_main->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_main->storeAs('/image',$filename);
        // }
        // $services->image_main = $filename;

        // if($request->hasFile('image_1')){
        //     $extension = $request->image_1->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_1->storeAs('image',$filename);
        // }
        // $services->image_1 = $filename;

        // if($request->hasFile('image_2')){  
        //     $extension = $request->image_2->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_2->storeAs('image',$filename);
        // }
        // $services->image_2 = $filename;

        // if($request->hasFile('image_3')){
        //     $extension = $request->image_3->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_3->storeAs('image',$filename);
        // }
        // $services->image_3 = $filename;


       $services->save();
       return redirect('admin1');
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
        $service = services::find($id);
        return view('admin1.service_edit',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = services::find($id);
        $services->service_heading = request("service_heading");
        $services->service_index_body = request("service_index_body");
        // $services->service_body = request("service_body");
        // if($request->hasFile('image_main')){
        //     $extension = $request->image_main->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_main->storeAs('/image',$filename);
        //     $services->image_main = $filename;

        // }

        // if($request->hasFile('image_1')){
        //     $extension = $request->image_1->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_1->storeAs('image',$filename);
        //     $services->image_1 = $filename;

        // }

        // if($request->hasFile('image_2')){  
        //     $extension = $request->image_2->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_2->storeAs('image',$filename);
        //     $services->image_2 = $filename;

        // }

        // if($request->hasFile('image_3')){
        //     $extension = $request->image_3->extension();
        //     $filename = Str::random(6)."_".time()."_product.".$extension;
        //     $request->image_3->storeAs('image',$filename);
        //     $services->image_3 = $filename;

        // }
       $services->save();
       return redirect('admin1'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = services::find($id);
        $services->delete();
        return redirect('admin1');         
    }
}
