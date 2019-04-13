<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
	public function index(){
		$mahasiswa = DB::table('mahasiswa')->get();
		return view('akademik', compact('mahasiswa'));
	}
}
