<?php

namespace App\Http\Controllers;

use App\Mhome;
use App\Msoal;
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

        $soal = Msoal::all();
        
        $data = array(
            'orang' => $request,
            'soal' => $soal
        );

        return view('page/test', $data); 
    }

    // postest

    public function postest(Request $request){
        $data = array(
            'orang' => $request,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl
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
