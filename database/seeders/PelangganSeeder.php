<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan1 = Pelanggan::create(['nama_pelanggan' => 'Dina Amelia', 'nik' => '1111111111111111', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'BBK Nugraha', 'nomor_hp' => '085647019939', 'email' => 'dina@gmail.com']);
        $pelanggan2 = Pelanggan::create(['nama_pelanggan' => 'Fitria Amelia', 'nik' => '1111111310116171', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Jalan Sadang Pesantren', 'nomor_hp' => '089547920099', 'email' => 'fitria@gmail.com']);
        $pelanggan3 = Pelanggan::create(['nama_pelanggan' => 'Dono Sujono', 'nik' => '1112211861141151', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'nomor_hp' => '082389230076', 'email' => 'dono@gmail.com']);
        $pelanggan4 = Pelanggan::create(['nama_pelanggan' => 'Bambang', 'nik' => '1141110011111119', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Kopo Permai II', 'nomor_hp' => '085647889939', 'email' => 'bambang@gmail.com']);
        $pelanggan5 = Pelanggan::create(['nama_pelanggan' => 'Rifa Fauziah', 'nik' => '5511111711113151', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Sindang Palay', 'nomor_hp' => '089920918966', 'email' => 'rifa@gmail.com']);
    }
}
