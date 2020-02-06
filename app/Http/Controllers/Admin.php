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
            'dm' => $array['dm'],
            'im' => $array['im'],
            'sm' => $array['sm'],
            'cm' => $array['cm'],
            'bm' => $array['bm'],
            'dl' => $array['dl'],
            'il' => $array['il'],
            'sl' => $array['sl'],
            'cl' => $array['cl'],
            'bl' => $array['bl']
    	);
    	return view('page/postest', $data);
    }
}
