<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    protected $visible = ['nama_merek'];
    protected $fillable = ['nama_merek'];
    public $timestamps = true;

    public function mobil()
    {
        return $this->hasMany('App\Models\Mobil', 'id_merek');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($merek) {
            if ($merek->mobil->count() > 0) {
                Alert::error('Gagal', 'Data tidak bisa dihapus karena data merek mempunyai data mobil');
                return false;
            }
        });
    }
}
