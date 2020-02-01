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
    	
    	$json = json_decode($data['no']);
    	foreach ($json as $key) {
    		echo $key->nomor."<br>";
    	}
    }
}
