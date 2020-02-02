<?php

namespace App\Http\Controllers;

use App\Msoal;
use App\Mnomor;
use Illuminate\Http\Request;

class Adminsoal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = Mnomor::all();
        $soal = Msoal::all();

        $data = array(
            'no' => $nomor,
            'pilihan' => $soal
        );
        return view('admin/soal', $data);
    }

    public function coba(){
        $data = [
            ['soal'=>'Coder 1', 'key'=> 'D'],
            ['soal'=>'Coder 2', 'key'=> 'I'],
            ['soal'=>'Coder 2', 'key'=> 'S'],
            ['soal'=>'Coder 2', 'key'=> 'C'],
            ['soal'=>'Coder 2', 'key'=> '*'],
        ];

        return $data;
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
        $soal = [
            ['pilihan' => $request->pilihan1, 'keym' => $request->keym1, 'keyl' => $request->keyl1],
            ['pilihan' => $request->pilihan2, 'keym' => $request->keym2, 'keyl' => $request->keyl2],
            ['pilihan' => $request->pilihan3, 'keym' => $request->keym3, 'keyl' => $request->keyl3],
            ['pilihan' => $request->pilihan4, 'keym' => $request->keym4, 'keyl' => $request->keyl4],
        ];

        $json = json_encode($soal);

        Msoal::create(['nomor' => $request->nomor, 'soal' => $json]);

        return redirect('/disc/soal')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function show(Msoal $msoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Msoal $msoal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msoal $msoal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Msoal  $msoal
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        Msoal::where(['nomor' => $key])->delete();
        return redirect('/disc/soal')->with('status', 'Data berhasil dihapus');
    }
}
