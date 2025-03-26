<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Kegiatan;
use App\Models\Guru;
use App\Models\ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all();
        $kegiatans = Kegiatan::all();
        $gurus = Guru::all();
        $ulasans = ulasan::all();
        return view('index', compact('prestasis', 'kegiatans','gurus','ulasans'));
    }

    public function tambah()
    {
        return view('index');
    }
   public function create(Request $request)
   {
    $request->validate([
        'nama' => 'required|max:255',
        'ulasan' => 'required|max:500',
        'tanggal' => 'required'
    ]);
    DB::table('ulasans')->insert([
        'nama'=>$request->nama,
        'ulasan'=>$request->ulasan,
        'tanggal'=>$request->tanggal
    ]);
    return redirect()->route('create');
   }
}