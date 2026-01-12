<?php

namespace App\Http\Controllers;

use App\Models\Opini;

class OpiniController extends Controller
{
    public function index()
    {
        $opini = Opini::latest()->get();
        return view('opini.index', compact('opini'));
    }

    public function show($id)
    {
        $opini = Opini::findOrFail($id);
        return view('opini.show', compact('opini'));
    }
}
