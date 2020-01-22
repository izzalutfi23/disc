<?php

namespace App\Http\Controllers;

use App\Mhome;
use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout/main');
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
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
    public function show(Mhome $mhome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
    public function edit(Mhome $mhome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mhome $mhome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mhome $mhome)
    {
        //
    }
}
