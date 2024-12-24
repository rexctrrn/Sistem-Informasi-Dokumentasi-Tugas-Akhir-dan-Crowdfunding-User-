<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasAkhir;
use App\Models\Dosen;

class TugasAkhirController extends Controller
{
    //
    public function index(Request $request){
        $tugasAkhir = TugasAkhir::latest()->paginate(5);
        if ($request->year) {
            # code...
            $tugasAkhir = TugasAkhir::where('tahun', $request->year)->latest()->paginate(5);
        }elseif ($request->search) {
            # code...
            $tugasAkhir = TugasAkhir::where('judul','LIKE', "%{$request->search}%")->orWhere('kata_kunci','LIKE', "%{$request->search}%")->orWhere('penulis','LIKE', "%{$request->search}%")->latest()->paginate(5);

        }
        return view ('index', compact('tugasAkhir'));
    }

    public function view($id){
        $tugasAkhir = TugasAkhir::find($id);
        if (!$tugasAkhir) {
            # code...
            return abort(404);
        }
        // return $tugasAkhir;
        return view('detail_skripsi', compact('tugasAkhir'));
    }
    
}
