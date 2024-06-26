<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'tbl_kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['id_destinasi', 'nama_kategori'];

    public function destinasi()
    {
        return $this->hasOne('App\Kategori', 'id_destinasi');
    }
}
