<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mahasiswa;
use App\Dosen;
use DB;
use App\MataKuliah;
use App\DataAkademik;
use App\User;
use App\Frs;
use Auth;

class AkademikController extends Controller
{
    public function index(){
		return view('akademik');
    }
		
		public function getFrs(){
			$matkul=DataAkademik::all();
			if(Auth::user()->role==2){
				$dataFrs = Frs::where('id_mahasiswa', Auth::user()->id)->get();
				$user=User::find(Auth::user()->id+25);	
				if (Auth::user()->status==0) {
					return view('ambil-frs', compact('matkul','user', 'dataFrs'));
				}
				else	{
					return view('hasil-frs', compact('matkul','user', 'dataFrs'));
				}
			
			}
			else{
				$dataFrs = Frs::where('id_mahasiswa', Auth::user()->id-25)->get();
				$user=User::find(Auth::user()->id-25);
				if ($user->status==0) {
					return view('ambil-frs', compact('matkul','user', 'dataFrs'));
				}
				else {
					return view('hasil-frs', compact('matkul','user', 'dataFrs'));
				}
	}
}

		public function akademikFrs(Request $request)
		{
			if (Auth::user()->role==2) {
			$data = DataAkademik::find($request->matkul);
			DB::table('frs')->insert([
				'id_dosen' => $data->id_dosen,
				'id_mahasiswa' => Auth::user()->id,
				'id_matkul' => $data->id_matkul ]);
			}
			else {
			$data = DataAkademik::find($request->matkul);
			DB::table('frs')->insert([
				'id_dosen' => $data->id_dosen,
				'id_mahasiswa' => Auth::user()->id-25,
				'id_matkul' => $data->id_matkul ]);
			}
			return redirect()->back()->with('success', 'Frs telah diambil');  
		}

		public function destroyFrs(Request $request)
    {
				$data = Frs::find($request->id)->delete();
        return redirect()->back();
		}
		
		Public function accFrs()
		{
			$user = User::find(Auth::user()->id-25);
				$user->status = 1;
				$user->save();
			return redirect()->back();
		}
		public function getMatkul()
		{
			$dataFrs = Frs::where('id_dosen', Auth::user()->id)->get();
			return view('nilai', compact('dataFrs'));
		}

		public function show($id)
    {
			$dataFrs = Frs::where('id_dosen', Auth::user()->id)->get();
    	return view('kelas', compact('dataFrs'));
		}
		
		public function editMatkul($id)
		{
			$dataFrs = Frs::where('id_dosen', Auth::user()->id)->get()[0];			
			$dataMatkul = MataKuliah::all();
			return view('edit', compact('dataFrs','dataMatkul'));
		}

		Public function updateMatkul(Request $request, $id) 
		{
			$value = ((int)$request->tugas+(int)$request->quis+(int)$request->uts+(int)$request->uas)/4 ;
			switch ($value) {
				case $value>85:
						$value="A";
						break;
				case $value>75:
						$value="AB";
						break;
				case $value>70:
						$value="B";
						break;
				case $value>60:
						$value="BC";
						break;
				case $value>50:
						$value="C";
						break;
				case $value>65:
						$value="D";
						break;
				default:
						$value="E";
		}
			$frs = Frs::find($id);
			$frs->nilai = $value;
			$frs->save();
			return $this->show($id);
		}

		
}
