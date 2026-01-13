<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /* =========================
       HOME
    ========================== */
    public function index()
{
    $beritas = Berita::latest()->skip(12)->take(5)->get();

    $carouselBerita = Berita::latest()->skip(10)->take(5)->get();

    $beritaTerbaru = Berita::latest()->skip(8)->take(5)->get();

    $ArtikelPilihan = Berita::latest()->skip(12)->take(4)->get();

    $beritaFeed = Berita::with('kategori')
        ->latest()
        ->skip(5)
        ->take(1)
        ->get();

    return view('welcome', compact(
        'beritas',
        'carouselBerita',
        'beritaTerbaru',
        'ArtikelPilihan',
        'beritaFeed'
    ));
}

    /* =========================
       DETAIL BERITA
    ========================== */
    public function show($id)
    {
        $berita = Berita::with('kategori')->findOrFail($id);

        $beritaTerbaru = Berita::where('id', '!=', $id)
            ->latest()
            ->skip(13)
            ->take(5)
            ->get();

        $ArtikelPilihan = Berita::where('id', '!=', $id)
            ->latest()
            ->skip(12)
            ->take(4)
            ->get();

        return view('berita', compact(
            'berita',
            'beritaTerbaru',
            'ArtikelPilihan'
        ));
    }

    // ===============================
    // INDEKS SEMUA BERITA
    // ===============================
    public function beritanav()
    {
        $beritas = Berita::with('kategori')
            ->latest()
            ->paginate(11);

        $kategoris = Kategori::all();

        return view('beritanav', compact('beritas', 'kategoris'));
    }

    // ===============================
    // BERITA PER KATEGORI
    // ===============================
    public function kategori($id)
    {
        $kategori = Kategori::findOrFail($id);

        $beritas = Berita::with('kategori')
            ->where('kategori_id', $kategori->id)
            ->latest()
            ->paginate(10);

        $kategoris = Kategori::all(); 

        return view('beritanav', compact(
            'beritas',
            'kategori',
            'kategoris'
        ));
    }
}
