<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $order = new order();
        $order->frm = request("frm");
        $order->destination = request("destination");
        $order->box = request("box");
        $order->name = request("name");
        $order->contact = request("contact");
        $order->email = request("email");
        $order->booking_details = request("booking_details");
        $order->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $order=order::all();
        return view('admin1.order', ['order'=>$order]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
