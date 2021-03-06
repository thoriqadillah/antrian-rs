<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mockery\Undefined;

class AntrianController extends Controller
{
    public function index() {
        $arr = ['A', 'B', 'C'];
        if (auth()->check()) {
            $antrian_user = Antrian::where([
                ['user_id', '=', Auth::id()],
                ['status', '=', 0],
                ['tanggal', Carbon::now()->format('Y-m-d')]
            ])->first();

            if($antrian_user)
            {
                $nomor = $antrian_user->nomor;
                $loket = $arr[$antrian_user->poli_id - 1];
                return view('antrian.antrian', compact('nomor', 'loket'));
            }
        }

        return view('antrian.antrian');
    }
    
    public function nomor_antrian() {
        $jumlahPolis = Poli::count();
        for($i = 1; $i <= $jumlahPolis; $i++)
        {
            $nomor[] = Antrian::select('nomor')
            ->where('tanggal', Carbon::now()->format('Y-m-d'))
            ->where('status', 0)
            ->where('poli_id', $i)
            ->orderBy('nomor', 'asc')
            ->first();
        }
        return response()->json([
            'nomors' => $nomor,
            'polis' => Poli::select('nama_poli')->get(),
        ]);
    }

    public function pendaftaran() {
        $data['polis'] = Poli::select('id', 'nama_poli')->get();
        return view('antrian.pendaftaran', $data);
    }

    public function submit(Request $request)
    {
        $antrian = new Antrian;
        $antrian->poli_id = $request->poli;
        $antrian->user_id = Auth::id();
        $antrian->nama = $request->nama;
        $tanggal = explode("-", $request->tanggal);
        $tempTanggal = $tanggal[2] . '-' . $tanggal[1] . '-' . $tanggal[0];
        $antrian->tanggal = $tempTanggal;
        $tempNomor = Antrian::select('nomor')
            ->where('tanggal', $tempTanggal)
            ->where('poli_id', $request->poli)
            ->orderBy('nomor', 'desc')
            ->first();
        if (empty($tempNomor)) {
            $antrian->nomor = 1;
        } else {
            $antrian->nomor = $tempNomor['nomor'] + 1;
        }
        $antrian->save();
        // return back()->with('status', 'Nomor antrian kamu adalah ' . $antrian->nomor . '!');
        return redirect('/antrian');
    }
}
