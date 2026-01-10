<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori'];
    protected $table = 'kategori'; 

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}
