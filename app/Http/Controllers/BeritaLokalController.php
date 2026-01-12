<?php
class BeritaLokalController extends Controller{
  public function index(){
    $berita = BeritaLokal::all();
    return
      view('berita-lokal.index',compact('berita'));
  }
}
