<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $table = 'tbl_gambar';
    protected $primaryKey = 'id_gambar';
    protected $fillable = [
        'url_gambar', 'id_destinasi'
    ];

    public $timestamps = false;

    public function destinasi()
    {
        return $this->belongsTo('App\Destinasi', 'id_destinasi');
    }
}
