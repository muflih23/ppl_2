<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;

class TokoController extends Controller
{
    public function index(){
       // return view('toko');
        $barang = DB::table('barang')
        ->orderBy('nama')
        ->get();

        return view('toko', ['barang'=>$barang]);
    }

    public function tokosearch(Request $r){
        $cari = $r->search;
        $barang = DB::table('barang')->where('nama', 'like', "%".$cari."%")->orderby('nama')->get();
        return view('toko', ['barang' => $barang]);
    }

}
