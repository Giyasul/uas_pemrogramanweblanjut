<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // tampilkan semua berita
    public function index()
    {
       $beritas = Berita::with('kategori')
           ->latest() 
            ->take(5)
            ->get();

        return view('welcome', compact('beritas'));
    }

    // detail berita
    public function show($id)
    {
    $berita = Berita::with('kategori')->findOrFail($id);

    // 5 berita terakhir (kecuali yang sedang dibuka)
    $beritaTerbaru = Berita::where('id', '!=', $id)
        ->latest() // berdasarkan created_at
        ->take(5)
        ->get();

    return view('berita', compact('berita', 'beritaTerbaru'));
    }

}

