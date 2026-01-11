<?php
namespace app\Models;
use 
illuminate\Database\Eloquent\factories\HasFactory;
use illuminate\Database\Eloquent\Model;
class wisata extends Model 
  {
    use HasFactory;
    protected $table = 'Wisata';
    protected $fillable = [
    'judul', 'kategori','gambar','isi'];
  }
