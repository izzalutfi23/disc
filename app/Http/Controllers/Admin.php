<?php

namespace App\Http\Controllers;

use App\Mnomor;
use App\Musertest;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){

    	$nomor = Mnomor::get();
    	$data = array(
    		'no' => $nomor
    	);

    	return view('admin/home');
    }
    public function usertest(){
    	$hasil = Musertest::get();
    	$data = array(
    		'hasil' => $hasil
    	);

    	return view('admin/usertest', $data);
    }
    public function lihathasil($musertest){
    	$hasil = Musertest::where('id', $musertest)->get();
    	foreach($hasil as $data){
        	$array = json_decode($data, true);
        }
    	$data = array(
    		'nama' => $array['nama'],
            'usia' => $array['usia'],
            'email' => $array['email'],
            'j_kel' => $array['j_kel'],
            'Dm' => $array['dm'],
            'Im' => $array['im'],
            'Sm' => $array['sm'],
            'Cm' => $array['cm'],
            'bm' => $array['bm'],
            'Dl' => $array['dl'],
            'Il' => $array['il'],
            'Sl' => $array['sl'],
            'Cl' => $array['cl'],
            'bl' => $array['bl']
    	);

         // Konversi Most (D)
        if($data['Dm'] == 20){
            $kmd = 100;
        }else if($data['Dm'] == 16){
            $kmd = 97;
        }
        else if($data['Dm'] == 15){
            $kmd = 93;
        }
        else if($data['Dm'] == 14){
            $kmd = 95;
        }
        else if($data['Dm'] == 13){
            $kmd = 83;
        }
        else if($data['Dm'] == 12){
            $kmd = 79;
        }
        else if($data['Dm'] == 11){
            $kmd = 76;
        }
        else if($data['Dm'] == 10){
            $kmd = 73;
        }
        else if($data['Dm'] == 9){
            $kmd = 59;
        }
        else if($data['Dm'] == 8){
            $kmd = 53;
        }
        else if($data['Dm'] == 7){
            $kmd = 48;
        }
        else if($data['Dm'] == 6){
            $kmd = 43;
        }
        else if($data['Dm'] == 5){
            $kmd = 38;
        }
        else if($data['Dm'] == 4){
            $kmd = 33;
        }
        else if($data['Dm'] == 3){
            $kmd = 95;
        }
        else if($data['Dm'] == 2){
            $kmd = 24;
        }
        else if($data['Dm'] == 1){
            $kmd = 15;
        }
        else if($data['Dm'] == 0){
            $kmd = 3;
        }

        // Konversi Most (I)
        if($data['Im'] == 0){
            $kmi = 8;
        }
        else if($data['Im'] == 1){
            $kmi = 20;
        }
        else if($data['Im'] == 2){
            $kmi = 35;
        }
        else if($data['Im'] == 3){
            $kmi = 43;
        }
        else if($data['Im'] == 4){
            $kmi = 56;
        }
        else if($data['Im'] == 5){
            $kmi = 68;
        }
        else if($data['Im'] == 6){
            $kmi = 73;
        }
        else if($data['Im'] == 7){
            $kmi = 83;
        }
        else if($data['Im'] == 8){
            $kmi = 88;
        }
        else if($data['Im'] == 9){
            $kmi = 92;
        }
        else if($data['Im'] == 10){
            $kmi = 97;
        }
        else if($data['Im'] == 11){
            $kmi = 100;
        }
        else if($data['Im'] == 12){
            $kmi = 100;
        }
        else if($data['Im'] == 13){
            $kmi = 100;
        }
        else if($data['Im'] == 14){
            $kmi = 100;
        }
        else if($data['Im'] == 15){
            $kmi = 100;
        }
        else if($data['Im'] == 16){
            $kmi = 100;
        }
        else if($data['Im'] == 17){
            $kmi = 100;
        }

        // Konversi Most (S)

        if($data['Sm'] == 0){
            $kms = 11;
        }
        else if($data['Sm'] == 1){
            $kms = 22;
        }
        else if($data['Sm'] == 2){
            $kms = 30;
        }
        else if($data['Sm'] == 3){
            $kms = 38;
        }
        else if($data['Sm'] == 4){
            $kms = 45;
        }
        else if($data['Sm'] == 5){
            $kms = 55;
        }
        else if($data['Sm'] == 6){
            $kms = 61;
        }
        else if($data['Sm'] == 7){
            $kms = 67;
        }
        else if($data['Sm'] == 8){
            $kms = 74;
        }
        else if($data['Sm'] == 9){
            $kms = 78;
        }
        else if($data['Sm'] == 10){
            $kms = 85;
        }
        else if($data['Sm'] == 11){
            $kms = 89;
        }
        else if($data['Sm'] == 12){
            $kms = 97;
        }
        else if($data['Sm'] == 13){
            $kms = 100;
        }
        else if($data['Sm'] == 14){
            $kms = 100;
        }
        else if($data['Sm'] == 15){
            $kms = 100;
        }
        else if($data['Sm'] == 16){
            $kms = 100;
        }
        else if($data['Sm'] == 19){
            $kms = 100;
        }

        // Konversi Most (c)

        if($data['Cm'] == 0){
            $kmc = 0;
        }
        else if($data['Cm'] == 1){
            $kmc = 16;
        }
        else if($data['Cm'] == 2){
            $kmc = 29;
        }
        else if($data['Cm'] == 3){
            $kmc = 40;
        }
        else if($data['Cm'] == 4){
            $kmc = 54;
        }
        else if($data['Cm'] == 5){
            $kmc = 66;
        }
        else if($data['Cm'] == 6){
            $kmc = 73;
        }
        else if($data['Cm'] == 7){
            $kmc = 84;
        }
        else if($data['Cm'] == 8){
            $kmc = 89;
        }
        else if($data['Cm'] == 9){
            $kmc = 96;
        }
        else if($data['Cm'] == 10){
            $kmc = 100;
        }
        else if($data['Cm'] == 11){
            $kmc = 100;
        }
        else if($data['Cm'] == 12){
            $kmc = 100;
        }
        else if($data['Cm'] == 13){
            $kmc = 100;
        }
        else if($data['Cm'] == 14){
            $kmc = 100;
        }
        else if($data['Cm'] == 15){
            $kmc = 100;
        }

        // Konversi Least (D)

        if($data['Dl'] == 0){
            $kld = 100;
        }
        else if($data['Dl'] == 1){
            $kld = 87;
        }
        else if($data['Dl'] == 2){
            $kld = 75;
        }
        else if($data['Dl'] == 3){
            $kld = 67;
        }
        else if($data['Dl'] == 4){
            $kld = 59;
        }
        else if($data['Dl'] == 5){
            $kld = 53;
        }
        else if($data['Dl'] == 6){
            $kld = 48;
        }
        else if($data['Dl'] == 7){
            $kld = 42;
        }
        else if($data['Dl'] == 8){
            $kld = 38;
        }
        else if($data['Dl'] == 9){
            $kld = 31;
        }
        else if($data['Dl'] == 10){
            $kld = 28;
        }
        else if($data['Dl'] == 11){
            $kld = 25;
        }
        else if($data['Dl'] == 12){
            $kld = 21;
        }
        else if($data['Dl'] == 13){
            $kld = 15;
        }
        else if($data['Dl'] == 14){
            $kld = 11;
        }
        else if($data['Dl'] == 15){
            $kld = 8;
        }
        else if($data['Dl'] == 16){
            $kld = 5;
        }
        else if($data['Dl'] == 21){
            $kld = 1;
        }

        // Konversi Least (I);

        if($data['Il'] == 0){
            $kli = 100;
        }
        else if($data['Il'] == 1){
            $kli = 86;
        }
        else if($data['Il'] == 2){
            $kli = 75;
        }
        else if($data['Il'] == 3){
            $kli = 67;
        }
        else if($data['Il'] == 4){
            $kli = 55;
        }
        else if($data['Il'] == 5){
            $kli = 46;
        }
        else if($data['Il'] == 6){
            $kli = 37;
        }
        else if($data['Il'] == 7){
            $kli = 28;
        }
        else if($data['Il'] == 8){
            $kli = 22;
        }
        else if($data['Il'] == 9){
            $kli = 15;
        }
        else if($data['Il'] == 10){
            $kli = 10;
        }
        else if($data['Il'] == 11){
            $kli = 7;
        }
        else if($data['Il'] == 19){
            $kli = 0;
        }

        // Konversi Least (S)

        if($data['Sl'] == 0){
            $kls = 100;
        }
        else if($data['Sl'] == 1){
            $kls = 96;
        }
        else if($data['Sl'] == 2){
            $kls = 85;
        }
        else if($data['Sl'] == 3){
            $kls = 75;
        }
        else if($data['Sl'] == 4){
            $kls = 67;
        }
        else if($data['Sl'] == 5){
            $kls = 59;
        }
        else if($data['Sl'] == 6){
            $kls = 53;
        }
        else if($data['Sl'] == 7){
            $kls = 42;
        }
        else if($data['Sl'] == 8){
            $kls = 37;
        }
        else if($data['Sl'] == 9){
            $kls = 29;
        }
        else if($data['Sl'] == 10){
            $kls = 23;
        }
        else if($data['Sl'] == 11){
            $kls = 15;
        }
        else if($data['Sl'] == 12){
            $kls = 8;
        }
        else if($data['Sl'] == 13){
            $kls = 4;
        }
        else if($data['Sl'] == 19){
            $kls = 1;
        }

        // Konversi Least (C)

        if($data['Cl'] == 0){
            $klc = 100;
        }
        else if($data['Cl'] == 1){
            $klc = 95;
        }
        else if($data['Cl'] == 2){
            $klc = 82;
        }
        else if($data['Cl'] == 3){
            $klc = 74;
        }
        else if($data['Cl'] == 4){
            $klc = 65;
        }
        else if($data['Cl'] == 5){
            $klc = 58;
        }
        else if($data['Cl'] == 6){
            $klc = 52;
        }
        else if($data['Cl'] == 7){
            $klc = 47;
        }
        else if($data['Cl'] == 8){
            $klc = 39;
        }
        else if($data['Cl'] == 9){
            $klc = 33;
        }
        else if($data['Cl'] == 10){
            $klc = 23;
        }
        else if($data['Cl'] == 11){
            $klc = 14;
        }
        else if($data['Cl'] == 12){
            $klc = 7;
        }
        else if($data['Cl'] == 13){
            $klc = 3;
        }
        else if($data['Cl'] == 16){
            $klc = 0;
        }

        $param = array(
            'nama' => $array['nama'],
            'usia' => $array['usia'],
            'email' => $array['email'],
            'j_kel' => $array['j_kel'],
            'dm' => $array['dm'],
            'im' => $array['im'],
            'sm' => $array['sm'],
            'cm' => $array['cm'],
            'bm' => $array['bm'],
            'dl' => $array['dl'],
            'il' => $array['il'],
            'sl' => $array['sl'],
            'cl' => $array['cl'],
            'bl' => $array['bl'],
            'kmd' => $kmd,
            'kmi' => $kmi,
            'kms' => $kms,
            'kmc' => $kmc,
            'kld' => $kld,
            'kli' => $kli,
            'kls' => $kls,
            'klc' => $klc
        );
    	return view('page/postest', $param);
    }
}
