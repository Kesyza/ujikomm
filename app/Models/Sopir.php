<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;

    protected $visible = ['nama_sopir', 'foto', 'nomor_hp', 'tarif'];
    protected $fillable = ['nama_sopir', 'foto', 'nomor_hp', 'tarif'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany('App\Models\Transaksi', 'id_sopir');
    }

    public function image()
    {
        if ($this->foto && file_exists(public_path('image/sopir/' . $this->foto))) {
            return asset('image/sopir/' . $this->foto);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/sopir/' . $this->foto))) {
            return unlink(public_path('image/sopir/' . $this->foto));
        }
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($sopir) {
            if ($sopir->transaksi->count() > 0) {
                Alert::error('Gagal', 'Data tidak bisa dihapus karena data sopir mempunyai data transaksi');
                return false;
            }
        });
    }
}
