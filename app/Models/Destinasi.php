<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Facade;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'tbl_destinasi';

    protected $primaryKey = 'id_destinasi';

    protected $fillable = [
        'id_user',
        'id_kategori',
        'nama_destinasi',
        'lokasi',
        'deskripsi',
        'status',
        'harga',
        'jam_buka',
        'jam_tutup',
    ];

    public $timestamps = false;

    public function gambar()
    {
        return $this->hasMany(Gambar::class, 'id_destinasi');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
