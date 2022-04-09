<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $date = Carbon::now()->toDateTimeString();
        $now = substr($date, 0, 10);

        $loket = Antrian::select('nomor', 'poli_id')
            ->where('tanggal', $now)
            ->where('status', 1)
            ->get();
        
        $data = [];
        for ($i = 0; $i < count($loket); $i++) {
            if ($loket[$i]->poli_id == 1) {
                $data['loket1'] = $loket[$i]->nomor + 1;
            }

            if ($loket[$i]->poli_id == 2) {
                $data['loket2'] = $loket[$i]->nomor + 1;
            }

            if ($loket[$i]->poli_id == 3) {
                $data['loket3'] = $loket[$i]->nomor + 1;
            }
        }
        
        return view('admin.admin', [
            'loket_1' => $data['loket1'] ?? 1,
            'loket_2' => $data['loket2'] ?? 1,
            'loket_3' => $data['loket3'] ?? 1
        ]);
    }

    public function next($poli) {
        $date = Carbon::now()->toDateTimeString();
        $now = substr($date, 0, 10);

        $loket = Antrian::select()
            ->where('tanggal', $now)
            ->where('status', 0)
            ->where('poli_id', $poli)
            ->first();

        $loket->status = 1;
        $loket->save();

        $nomor = Antrian::select('nomor')
        ->where('tanggal', $now)
        ->where('status', 0)
        ->where('poli_id', $poli)
        ->first();

        return response()->json([
            'nomor' => $nomor->nomor
        ]);
    }
}
