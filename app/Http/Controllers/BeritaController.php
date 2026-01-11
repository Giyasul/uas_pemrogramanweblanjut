<?php
namespace app\Http\Controllers;
use app\model\Berita;
class BeritaController Extends Controller {
  public function index(){
    $berita = Berita::orderBy('id','desc')->get();
    return view ('berita.index',compact('berita'));
  }
  public funtion show ($id){
  $berita = Berita::find0Fail($id);
     return view('berita.show', compact('berita'));
}
}
