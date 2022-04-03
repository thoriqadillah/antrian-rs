<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    public function index(){
        return view('Home',[
            "posts"=> Poli::all()
        ]);    
    }
}
