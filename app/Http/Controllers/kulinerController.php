<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class KulinerController extends Controller
{
    public function index()
    {
        $kuliners = Berita::where('kategori', 'Kuliner')->get();
        return view('kuliner.index', compact('kuliners'));
    }

    public function show($id)
    {
        $kuliner = Berita::findOrFail($id);
        return view('kuliner.show', compact('kuliner'));
    }
}
