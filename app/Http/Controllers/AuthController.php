<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.formLogin');
    }
}
