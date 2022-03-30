<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    public function index() {
        return view('antrian.index');
    }

    public function pendaftaran() {
        return view('antrian.pendaftaran');
    }

    public function submit(Request $request)
    {
        $antrian = new Antrian;
        $antrian->poli = $request->poli;
        $antrian->nama = $request->nama;
        $tanggal = explode("-", $request->tanggal);
        $tempTanggal = $tanggal[2] . '-' . $tanggal[1] . '-' . $tanggal[0];
        $antrian->tanggal = $tempTanggal;
        $tempNomor = Antrian::select('nomor')
            ->where('tanggal', $tempTanggal)
            ->where('poli', $request->poli)
            ->orderBy('nomor', 'desc')
            ->first();
        if (empty($tempNomor)) {
            $antrian->nomor = 1;
        } else {
            $antrian->nomor = $tempNomor['nomor'] + 1;
        }
        $antrian->save();
        return back()->with('status', 'Nomor antrian kamu adalah ' . $antrian->nomor . '!');
    }
}
