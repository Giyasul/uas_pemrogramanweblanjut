<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'kategori_id',
        'judul',
        'isi',
        'gambar',
        'tanggal'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
