<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $visible = ['nama_pelanggan', 'nik', 'jenis_kelamin', 'alamat', 'no_hp', 'email'];
    protected $fillable = ['nama_pelanggan', 'nik', 'jenis_kelamin', 'alamat', 'no_hp', 'email'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_pelanggan');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($pelanggan) {
            if ($pelanggan->transaksi->count() > 0) {
                Alert::error('Gagal', 'Data tidak bisa dihapus karena data pelanggan mempunyai data transaksi');
                return false;
            }
        });
    }
}
