<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function index() {
        $nomorA = Antrian::select('nomor')
            ->where('tanggal', Carbon::now()->format('Y-m-d'))
            ->where('status', 0)
            ->where('poli', 1)
            ->orderBy('nomor', 'asc')
            ->first();
        $data['nomorA'] = $nomorA;
        $nomorB = Antrian::select('nomor')
            ->where('tanggal', Carbon::now()->format('Y-m-d'))
            ->where('status', 0)
            ->where('poli', 2)
            ->orderBy('nomor', 'asc')
            ->first();
        $data['nomorB'] = $nomorB;
        $nomorC = Antrian::select('nomor')
            ->where('tanggal', Carbon::now()->format('Y-m-d'))
            ->where('status', 0)
            ->where('poli', 3)
            ->orderBy('nomor', 'asc')
            ->first();
        $data['nomorC'] = $nomorC;
        return view('antrian.index', $data);
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
