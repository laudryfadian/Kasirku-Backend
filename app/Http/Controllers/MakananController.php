<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index()
    {
    	$makanan = DB::table('makanans')->get();
    	return view('makanan.index',['makanan' => $makanan]);
 
    }

    public function tambah(){
        return view('makanan.tambah');
    }

    public function store(Request $request){
        DB::table('makanans')->insert([
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);
        return redirect('/listmenu');
    }

    public function edit($id){
        $makanan = DB::table('makanans')->where('id',$id)->get();
        return view('makanan.edit', compact('makanan'));
    }

    public function update(Request $request){
        DB::table('makanans')->where('id', $request->id)->update([
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'gambar' => $request->gambar
        ]);
        return redirect('/listmenu');
    }

    public function delete($id){
        DB::table('makanans')->where('id',$id)->delete();
        return redirect('/listmenu');
    }
}
