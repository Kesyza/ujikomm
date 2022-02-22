<?php

namespace App\Models;

// use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $visible = ['id_pelanggan', 'id_mobil', 'id_sopir', 'tanggal_sewa', 'tanggal_kembali', 'total_bayar', 'status_sewa'];
    protected $fillable = ['id_pelanggan', 'id_mobil', 'id_sopir', 'tanggal_sewa', 'tanggal_kembali', 'total_bayar', 'status_sewa'];
    public $timestamps = true;

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan', 'id_pelanggan');
    }

    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil', 'id_mobil');
    }

    public function sopir()
    {
        return $this->belongsTo('App\Models\Sopir', 'id_sopir');
    }
}
