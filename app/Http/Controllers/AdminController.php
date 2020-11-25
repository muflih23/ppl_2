<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Image;


class AdminController extends Controller
{
    public function login(){
        return view('login');
    }

    public function admlogin(Request $r){
        $username = $r->username;
        $password = $r->password;

        $dataLogin = DB::table('admins')->where('username', $username)->first();
        if($dataLogin){
            if(Hash::check($password, $dataLogin->password)){
                session_start();
                $_SESSION['admin']=$dataLogin;
                return redirect('/admin');
            }
            else{
                return redirect('/');
            }
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        echo '<script language="javascript"> alert("Anda telah berhasil log out!"); document.location="/"; </script>';
    }

    public function home(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else{
            $pegunungan = DB::table('pegunungan')
            ->orderBy('gunung')
            ->get();

            return view('admin_home', ['pegunungan'=>$pegunungan]);
        }
    }

    public function tambahdest(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else
        {
            return view('tambahdest');
        }
    }

    public function tambahdestf(Request $request){
        $t1 =  $this->code_gen(3);
        $id = $t1."".time(); //bikin item id

        DB::table('pegunungan')->insert([
            'id'=>$id,
            'gunung'=>$request->gunung,
        ]);
        
        $foto = $request->file('foto');           
        $name = $foto->getClientOriginalName();
        $path = $foto->getRealPath();
        $foto->move(\base_path() ."\public/pegunungan", $name);
        DB::table('pegunungan')->where('id', $id)->update([
            'foto' => $name
        ]);

        

        echo '<script language="javascript"> alert("Data telah ditambahkan!"); document.location="/admin"; </script>';
    }

    public function deletedest($id){
        $foto = DB::table('pegunungan')->select('foto', 'id')->where('id', $id)->first();

        File::delete('pegunungan/'.$foto->foto);
        DB::table('pegunungan')->where('id', $id)->delete();
        echo '<script language="javascript"> alert("Data telah dihapus!"); document.location="/admin"; </script>';
    }

    public function admintoko(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else{
            $barang = DB::table('barang')
            ->orderBy('nama')
            ->get();

            return view('admintoko', ['barang'=>$barang]);
        }
    }

    public function admintokosearch(Request $request){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else{
            $cari = $request->search;
            $barang = DB::table('barang')->where('nama', 'like', "%".$cari."%")->orderby('nama')->get();
            return view('admintoko', ['barang' => $barang]);
        }
    }

    public function tambahbarang(){
        session_start();
        if (!isset($_SESSION['admin']))
        {
            echo '<script language="javascript"> alert("Anda harus login terlebih dahulu untuk mengakses halaman ini!"); document.location="/login"; </script>';
        }
        else{
            return view('tambahbarang');
        }
    }

    public function tambahbarangf(Request $request){
        $t1 =  $this->code_gen(3);
        $id = $t1."".time(); //bikin item id

        DB::table('barang')->insert([
            'id'=>$id,
            'nama'=>$request->nama,
            'detail'=>$request->detail,
            'harga'=>$request->harga,
        ]);
        
        $file = $request->file('file');           
        $name = $file->getClientOriginalName();
        $path = $file->getRealPath();
        /*$file->resize(465, 249, function($constraint){
            $constraint->aspectRatio();
        })->move(\base_path() ."\public/barangtoko", $name);*/
        $file->move(\base_path() ."\public/barangtoko", $name);
        DB::table('barang')->where('id', $id)->update([
            'file' => $name
        ]);

        

        echo '<script language="javascript"> alert("Data telah ditambahkan!"); document.location="/admintoko"; </script>';
    }

    public function deletebarang($id){
        $file = DB::table('barang')->select('file', 'id')->where('id', $id)->first();

        File::delete('barangtoko/'.$file->file);
        DB::table('barang')->where('id', $id)->delete();
        echo '<script language="javascript"> alert("Data telah dihapus!"); document.location="/admintoko"; </script>';
    }

    public function code_gen($n){
        $num = Str::random($n);
   
        return $num;
    }
}
