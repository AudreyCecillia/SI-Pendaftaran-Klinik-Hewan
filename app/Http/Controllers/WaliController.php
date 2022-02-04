<?php

namespace App\Http\Controllers;

use App\Models\Wali;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walis = Wali::all();
        return view('wali.index', compact('walis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create";
        return view('wali.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wali::create($request->all());
        return redirect('wali');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {
        return view('wali.edit', compact('wali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wali $wali)
    {
        $wali->update($request->all());
        return redirect('wali');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        $wali->delete();
        return redirect('wali');
    }
}
