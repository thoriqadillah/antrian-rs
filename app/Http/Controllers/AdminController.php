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

        $loket = Antrian::select('nomor')
            ->where('tanggal', $now)
            ->where('status', 0)
            ->first();

        return view('admin.index', ['loket' => $loket->nomor]);
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
        return redirect('/admin')->with('loket', $loket->nomor);
    }
}
