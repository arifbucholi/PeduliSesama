<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use App\Models\tes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function insertPerizinan(Request $request){
        // dd($request->all());
        DB::table('perizinan')->insert([
            'nama' => $request->nama_lengkap,
            'tanggal_lahir' => $request->tgl_lahir,
            'alamat_tinggal' => $request->alamat,
            'nomor_telepon' => $request->notelp,
            'nomor_telepon_keluarga' => $request->notelp_keluarga,
            'id_gunung' => $request->nama_gunung,
            'tanggal_pendakian' => $request->tgl,
            // 'foto_ktp' => $request->foto_ktp,
            // 'surat_ket_sehat' => $request->surat_ket_sehat,

        ]);
        return redirect('/status');
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
        if($request->isMethod('post')){
            Perizinan::create([
                'nama'=> $request->nama,
                'tanggal_lahir'=>$request->tgl_lahir,
                'alamat_tinggal'=>$request->alamat,
                'nomor_telepon'=>$request->notelp,
                'nomor_telepon_keluarga'=>$request->keltelp,
                'tanggal_pendakian'=>$request->tgl,
            ]);
            return redirect('/menuutama');
        }
        return view('/menuutama');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(Perizinan $perizinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perizinan $perizinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perizinan $perizinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perizinan $perizinan)
    {
        //
    }
}
