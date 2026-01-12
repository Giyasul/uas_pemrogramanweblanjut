<?php
class EKoranController extends controller {
public function index(){
$koran = EKoran::all();
  return view('e-koran.index',compact(koran));
  
}
}
