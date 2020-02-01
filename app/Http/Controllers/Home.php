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
        $data = array(
            'orang' => null
        );
        return view('page/registrasi', $data);
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
        $messages = [
            'required' => 'Isi sesuai petunjuk',
            'numeric' => 'attribute wajib dengan nomor atau angka',
            'email' => 'attribute wajib menggunakan format email'
        ];

        $request->validate([
            'nama'=>'required',
            'usia'=>'required|numeric',
            'email'=>'required|email',
            'j_kel'=>'required'
        ], $messages);
        
        $data = array(
            'orang' => $request
        );

        return view('page/test', $data); 
    }

    // postest

    public function postest(Request $request){
        $data = array(
            'orang' => $request
        );
        return view('page/postest', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
}
