<?php

namespace App\Http\Controllers;

use App\Mhome;
use App\Msoal;
use App\Musertest;
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
            'nama' => null
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
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'soal' => $soal
        );

        return view('page/test', $data); 
    }

    // postest

    public function postest(Request $request){

        // Konversi Most (D)
        if($request->Dm == 20){
            $kmd = 100;
        }else if($request->Dm == 16){
            $kmd = 97;
        }
        else if($request->Dm == 15){
            $kmd = 93;
        }
        else if($request->Dm == 14){
            $kmd = 95;
        }
        else if($request->Dm == 13){
            $kmd = 83;
        }
        else if($request->Dm == 12){
            $kmd = 79;
        }
        else if($request->Dm == 11){
            $kmd = 76;
        }
        else if($request->Dm == 10){
            $kmd = 73;
        }
        else if($request->Dm == 9){
            $kmd = 59;
        }
        else if($request->Dm == 8){
            $kmd = 53;
        }
        else if($request->Dm == 7){
            $kmd = 48;
        }
        else if($request->Dm == 6){
            $kmd = 43;
        }
        else if($request->Dm == 5){
            $kmd = 38;
        }
        else if($request->Dm == 4){
            $kmd = 33;
        }
        else if($request->Dm == 3){
            $kmd = 95;
        }
        else if($request->Dm == 2){
            $kmd = 24;
        }
        else if($request->Dm == 1){
            $kmd = 15;
        }
        else if($request->Dm == 0){
            $kmd = 3;
        }

        // Konversi Most (I)
        if($request->Im == 0){
            $kmi = 8;
        }
        else if($request->Im == 1){
            $kmi = 20;
        }
        else if($request->Im == 2){
            $kmi = 35;
        }
        else if($request->Im == 3){
            $kmi = 43;
        }
        else if($request->Im == 4){
            $kmi = 56;
        }
        else if($request->Im == 5){
            $kmi = 68;
        }
        else if($request->Im == 6){
            $kmi = 73;
        }
        else if($request->Im == 7){
            $kmi = 83;
        }
        else if($request->Im == 8){
            $kmi = 88;
        }
        else if($request->Im == 9){
            $kmi = 92;
        }
        else if($request->Im == 10){
            $kmi = 97;
        }
        else if($request->Im == 11){
            $kmi = 100;
        }
        else if($request->Im == 12){
            $kmi = 100;
        }
        else if($request->Im == 13){
            $kmi = 100;
        }
        else if($request->Im == 14){
            $kmi = 100;
        }
        else if($request->Im == 15){
            $kmi = 100;
        }
        else if($request->Im == 16){
            $kmi = 100;
        }
        else if($request->Im == 17){
            $kmi = 100;
        }

        // Konversi Most (S)

        if($request->Sm == 0){
            $kms = 11;
        }
        else if($request->Sm == 1){
            $kms = 22;
        }
        else if($request->Sm == 2){
            $kms = 30;
        }
        else if($request->Sm == 3){
            $kms = 38;
        }
        else if($request->Sm == 4){
            $kms = 45;
        }
        else if($request->Sm == 5){
            $kms = 55;
        }
        else if($request->Sm == 6){
            $kms = 61;
        }
        else if($request->Sm == 7){
            $kms = 67;
        }
        else if($request->Sm == 8){
            $kms = 74;
        }
        else if($request->Sm == 9){
            $kms = 78;
        }
        else if($request->Sm == 10){
            $kms = 85;
        }
        else if($request->Sm == 11){
            $kms = 89;
        }
        else if($request->Sm == 12){
            $kms = 97;
        }
        else if($request->Sm == 13){
            $kms = 100;
        }
        else if($request->Sm == 14){
            $kms = 100;
        }
        else if($request->Sm == 15){
            $kms = 100;
        }
        else if($request->Sm == 16){
            $kms = 100;
        }
        else if($request->Sm == 19){
            $kms = 100;
        }

        // Konversi Most (c)

        if($request->Cm == 0){
            $kmc = 0;
        }
        else if($request->Cm == 1){
            $kmc = 16;
        }
        else if($request->Cm == 2){
            $kmc = 29;
        }
        else if($request->Cm == 3){
            $kmc = 40;
        }
        else if($request->Cm == 4){
            $kmc = 54;
        }
        else if($request->Cm == 5){
            $kmc = 66;
        }
        else if($request->Cm == 6){
            $kmc = 73;
        }
        else if($request->Cm == 7){
            $kmc = 84;
        }
        else if($request->Cm == 8){
            $kmc = 89;
        }
        else if($request->Cm == 9){
            $kmc = 96;
        }
        else if($request->Cm == 10){
            $kmc = 100;
        }
        else if($request->Cm == 11){
            $kmc = 100;
        }
        else if($request->Cm == 12){
            $kmc = 100;
        }
        else if($request->Cm == 13){
            $kmc = 100;
        }
        else if($request->Cm == 14){
            $kmc = 100;
        }
        else if($request->Cm == 15){
            $kmc = 100;
        }

        // Konversi Least (D)

        if($request->Dl == 0){
            $kld = 100;
        }
        else if($request->Dl == 1){
            $kld = 87;
        }
        else if($request->Dl == 2){
            $kld = 75;
        }
        else if($request->Dl == 3){
            $kld = 67;
        }
        else if($request->Dl == 4){
            $kld = 59;
        }
        else if($request->Dl == 5){
            $kld = 53;
        }
        else if($request->Dl == 6){
            $kld = 48;
        }
        else if($request->Dl == 7){
            $kld = 42;
        }
        else if($request->Dl == 8){
            $kld = 38;
        }
        else if($request->Dl == 9){
            $kld = 31;
        }
        else if($request->Dl == 10){
            $kld = 28;
        }
        else if($request->Dl == 11){
            $kld = 25;
        }
        else if($request->Dl == 12){
            $kld = 21;
        }
        else if($request->Dl == 13){
            $kld = 15;
        }
        else if($request->Dl == 14){
            $kld = 11;
        }
        else if($request->Dl == 15){
            $kld = 8;
        }
        else if($request->Dl == 16){
            $kld = 5;
        }
        else if($request->Dl == 21){
            $kld = 1;
        }

        // Konversi Least (I);

        if($request->Il == 0){
            $kli = 100;
        }
        else if($request->Il == 1){
            $kli = 86;
        }
        else if($request->Il == 2){
            $kli = 75;
        }
        else if($request->Il == 3){
            $kli = 67;
        }
        else if($request->Il == 4){
            $kli = 55;
        }
        else if($request->Il == 5){
            $kli = 46;
        }
        else if($request->Il == 6){
            $kli = 37;
        }
        else if($request->Il == 7){
            $kli = 28;
        }
        else if($request->Il == 8){
            $kli = 22;
        }
        else if($request->Il == 9){
            $kli = 15;
        }
        else if($request->Il == 10){
            $kli = 10;
        }
        else if($request->Il == 11){
            $kli = 7;
        }
        else if($request->Il == 19){
            $kli = 0;
        }

        // Konversi Least (S)

        if($request->Sl == 0){
            $kls = 100;
        }
        else if($request->Sl == 1){
            $kls = 96;
        }
        else if($request->Sl == 2){
            $kls = 85;
        }
        else if($request->Sl == 3){
            $kls = 75;
        }
        else if($request->Sl == 4){
            $kls = 67;
        }
        else if($request->Sl == 5){
            $kls = 59;
        }
        else if($request->Sl == 6){
            $kls = 53;
        }
        else if($request->Sl == 7){
            $kls = 42;
        }
        else if($request->Sl == 8){
            $kls = 37;
        }
        else if($request->Sl == 9){
            $kls = 29;
        }
        else if($request->Sl == 10){
            $kls = 23;
        }
        else if($request->Sl == 11){
            $kls = 15;
        }
        else if($request->Sl == 12){
            $kls = 8;
        }
        else if($request->Sl == 13){
            $kls = 4;
        }
        else if($request->Sl == 19){
            $kls = 1;
        }

        // Konversi Least (C)

        if($request->Cl == 0){
            $klc = 100;
        }
        else if($request->Cl == 1){
            $klc = 95;
        }
        else if($request->Cl == 2){
            $klc = 82;
        }
        else if($request->Cl == 3){
            $klc = 74;
        }
        else if($request->Cl == 4){
            $klc = 65;
        }
        else if($request->Cl == 5){
            $klc = 58;
        }
        else if($request->Cl == 6){
            $klc = 52;
        }
        else if($request->Cl == 7){
            $klc = 47;
        }
        else if($request->Cl == 8){
            $klc = 39;
        }
        else if($request->Cl == 9){
            $klc = 33;
        }
        else if($request->Cl == 10){
            $klc = 23;
        }
        else if($request->Cl == 11){
            $klc = 14;
        }
        else if($request->Cl == 12){
            $klc = 7;
        }
        else if($request->Cl == 13){
            $klc = 3;
        }
        else if($request->Cl == 16){
            $klc = 0;
        }

        $data = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl,
            'kmd' => $kmd,
            'kmi' => $kmi,
            'kms' => $kms,
            'kmc' => $kmc,
            'kld' => $kld,
            'kli' => $kli,
            'kls' => $kls,
            'klc' => $klc
        );

        $param = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
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

        Musertest::create($param);

        return view('page/postest', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
}

// https://vituspolikarpus.wordpress.com/2012/05/13/disc-dominance-influence-steadiness-complience/
