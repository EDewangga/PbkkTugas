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


    // public function getMatakuliahDetail($id){
    //     $matkul = MataKuliah::find($id);
    //     $dosen = MataKuliah::find($id)->pengajar;
    //     return view('matkul-detail', compact('dosen', 'matkul'));
    // }

    // public function getPengajarDetail($id){
    //     $dosens = Dosen::find($id);
    //     $dosen = Dosen::find($id)->mengajars;
    //     return view('detail-dosen', compact('dosen','dosens'));
		// }
		
		public function getFrs(){
			$matkul=DataAkademik::all();
			if(Auth::user()->role==2){
				$dataFrs = Frs::where('id_mahasiswa', Auth::user()->id)->get();
				$user=User::find(Auth::user()->id+25);	
				return view('ambil-frs', compact('matkul','user', 'dataFrs'));
			}
			else{
				$dataFrs = Frs::where('id_mahasiswa', Auth::user()->id-25)->get();
				$user=User::find(Auth::user()->id-25);
				return view('ambil-frs', compact('matkul','user', 'dataFrs'));}
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
				return $request;
			$data = DataAkademik::find($request->matkul);
			return $data;
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
			$dataFrs = Frs::where('id_dosen', Auth::user()->id-25)->get();
			return view('nilai', compact('dataFrs'));
		}

		public function show($id)
    {
    	$dataFrs = Frs::where('id_dosen', Auth::user()->id-25)->get();
    	return view('kelas', compact('dataFrs'));
		}
		
		public function editMatkul($id)
		{
			$dataFrs = Frs::where('id_dosen', Auth::user()->id-25)->get()[0];			
			$dataMatkul = MataKuliah::all();
			return view('edit', compact('dataFrs','dataMatkul'));
		}

		Public function updateMatkul(Request $request, $id) 
		{
			$frs = Frs::find($id);
			$frs->nilai = $request->nilai;
			$frs->save();
			return $this->show($id);
		}

		
}
