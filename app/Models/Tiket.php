<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tbl_tiket';

    protected $primaryKey = 'id_tiket';

    protected $fillable = [
        'id_destinasi',
        'id_user',
        'code_tiket',
        'total_pesanan',
        'total_harga',
        'tanggal_pesanan',
        'tanggal_kunjungan',
        'status'
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi');
    }

    public $timestamps = false;
}
