<?php

namespace App\Http\Controllers;

use App\Mnomor;
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
}
