<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index()
    {
    	$makanan = DB::table('makanans')->get();
    	return view('makanan',['makanan' => $makanan]);
 
    }
}
