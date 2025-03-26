<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kegiatan()
{
    $kegiatans = Kegiatan::all(); // Ambil data dari model
    return view('index', compact('kegiatans'));
}
}
