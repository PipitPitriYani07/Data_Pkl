<?php

namespace App\Http\Controllers;

use id;
use App\Models\Peserta;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function indexpeserta(Request $request){
        $data = [
            'sekolah'   => Sekolah::all(),
            'peserta'   => Peserta::with('sekolah')->get()
        ];
        return view('peserta.indexpeserta', $data);
    }

    public function daftarpeserta(Request $request){
        $request->validate([
            'namapeserta'       => 'required',
            'nis'               => 'required',
            'sekolah_id'        => 'required',
            'jurusan'           => 'required'
    ]);
    $dataStore = [
        'namapeserta'       => $request->namapeserta,
        'nis'               => $request->nis,
        'sekolah_id'        => $request->sekolah_id,
        'jurusan'           => $request->jurusan
    ];
    Peserta::create($dataStore);
    return redirect('/indexpeserta');
    }

    public function edit(Request $request, $id){
        $data = [
            'sekolah'   => Sekolah::all(),
            'peserta'   => Peserta::where('id', $id)->first()
        ];
        return view('peserta.editpeserta', $data);
    }

    public function ubah(Request $request, $id){
        $request->validate([
            'namapeserta'       => 'required',
            'nis'               => 'required',
            'sekolah_id'        => 'required',
            'jurusan'           => 'required'
    ]);
    $dataStore = [
        'namapeserta'       => $request->namapeserta,
        'nis'               => $request->nis,
        'sekolah_id'        => $request->sekolah_id,
        'jurusan'           => $request->jurusan
    ];
    Peserta::where('id', $id)->update($dataStore);
    return redirect('/indexpeserta');

    }

    public function hapus(Request $request, $id){
        Peserta::where('id', $id)->delete();
        return redirect('/indexpeserta');
    }

}
