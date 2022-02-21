<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $visible = ['nama_mobil', 'gambar', 'id_merek', 'nomor_polisi', 'warna_mobil', 'tahun_pembuatan', 'status', 'harga_sewa', 'denda'];
    protected $fillable = ['nama_mobil', 'gambar', 'id_merek', 'nomor_polisi', 'warna_mobil', 'tahun_pembuatan', 'status', 'harga_sewa', 'denda'];
    public $timestamps = true;

    public function merek()
    {
        return $this->belongsTo('App\Models\Merek', 'id_merek');
    }

    public function image()
    {
        if ($this->gambar && file_exists(public_path('image/mobil/' . $this->gambar))) {
            return asset('image/mobil/' . $this->gambar);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('image/mobil/' . $this->gambar))) {
            return unlink(public_path('image/mobil/' . $this->gambar));
        }
    }

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_mobil');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($mobil) {
            if ($mobil->transaksi->count() > 0) {
                Alert::error('Gagal', 'Data tidak bisa dihapus karena data mobil mempunyai data transaksi');
                return false;
            }
        });
    }
}
