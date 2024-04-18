<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodies = Body::all();
        return view('resources.bodies.index', compact('bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("resources.bodies.create");
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
            'name' => 'required'
        ]);

        $body = Body::create($request->input());

        if ($request->hasFile("logo")) {
            $body->logo = upload_file("logo", '/bodytypes');
            $body->save();
        }

        return redirect('/bodies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function show(Body $body)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function edit(Body $body)
    {
        return view("resources.bodies.edit", compact("body"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Body $body)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $body->update($request->input());

        if ($request->hasFile("logo")) {
            $body->logo = upload_file("logo", '/bodytypes');
            $body->save();
        }

        return redirect('/bodies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Body  $body
     * @return \Illuminate\Http\Response
     */
    public function destroy(Body $body)
    {
        $body->delete();
        return redirect("/bodies");
    }
}
