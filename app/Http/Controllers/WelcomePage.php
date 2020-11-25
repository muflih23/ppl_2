<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class WelcomePage extends Controller
{
    public function index(){
       // return view('welcomepage');
       $pegunungan = DB::table('pegunungan')
        ->orderBy('gunung')
        ->get();

        return view('welcomepage', ['pegunungan'=>$pegunungan]);
    }
}
