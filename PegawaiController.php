<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Redirect;

class PegawaiController extends Controller
{    
    
    //
    public function index(){
        $pegawai = DB::table('pegawai')->get();
        return view('pegawai.index',['pegawai' =>$pegawai]);
    }

    public function tambah(){
        //insert data ke tabel
    return view ('tambah');
    }
    
    public function store(Request $request){
        DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur
        ]);
    return redirect('/pegawai');
}

public function edit($id){
    $pegawai = DB::table('pegawai')->where('id',$id)->get();
    return view('pegawai.edit',['pegawai' => $pegawai]);
}

public function update(Request $request){
    DB::table('pegawai')->where('id',$request->id)->update([
        'nama' => $request ->nama,
        'jk' => $request ->jk,
        'jabatan' => $request->jabatan,
        'umur' => $request->umur
    ]);
    return redirect('/pegawai');
}

public function hapus($id){
    DB::table('pegawai')->where('id',$id)->delete();
    return redirect('/pegawai');
}
}