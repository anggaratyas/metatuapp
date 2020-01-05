<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('penduduk.index');
    }
        
    public function getdatapenduduk()
    {
        $penduduk = Penduduk::select('penduduks.*');
        return \DataTables::eloquent($penduduk)
        ->addColumn('nama_link',function($p){
            return '<a href="/penduduk/'.$p->id.'/profile">'.$p->nama_lengkap.'</a>';
        })
        ->rawColumns(['nama_link'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nik' => 'required|size:16',
        ]);


        $penduduk = new \App\Penduduk;
        $penduduk->nama_lengkap = $request->nama_lengkap;
        $penduduk->nik = $request->nik;
        $penduduk->kk = $request->kk;
        $penduduk->tlp = $request->tlp;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tgl_lahir = $request->tgl_lahir;
        $penduduk->jenis_kel = $request->jenis_kel;
        $penduduk->status = $request->status;
        $penduduk->agama = $request->agama;
        $penduduk->skul = $request->skul;
        $penduduk->ibu = $request->ibu;
        $penduduk->ayah = $request->ayah;
        $penduduk->kwn = $request->kwn;
        $penduduk->alamat = $request->alamat;
        $penduduk->rt = $request->rt;
        $penduduk->rw = $request->rw;
        $penduduk->email = $request->email;
        $penduduk->kdpos = '61172';
        $penduduk->propinsi = 'JAWA TIMUR';
        $penduduk->kabupaten = 'GRESIK';
        $penduduk->kecamatan = 'BENJENG';
        $penduduk->save();

        return redirect('/penduduk')->with('status', 'Data Penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view('dashboard.penduduk.profil', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        //
    }

    public function profile($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduk.profile', ['penduduk' => $penduduk]);
    }



}
