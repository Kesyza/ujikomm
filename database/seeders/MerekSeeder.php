<?php

namespace Database\Seeders;

use App\Models\Merek;
use Illuminate\Database\Seeder;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merek1 = Merek::create(['nama_merek' => 'Toyota']);
        $merek2 = Merek::create(['nama_merek' => 'Honda']);
        $merek3 = Merek::create(['nama_merek' => 'Daihatsu']);
        $merek4 = Merek::create(['nama_merek' => 'KIA']);
        $merek5 = Merek::create(['nama_merek' => 'Mitsubishi']);
        $merek6 = Merek::create(['nama_merek' => 'Nissan']);
        $merek7 = Merek::create(['nama_merek' => 'Mercedes-Benz']);
        $merek8 = Merek::create(['nama_merek' => 'BMW']);
        $merek9 = Merek::create(['nama_merek' => 'Isuzu']);
        $merek10 = Merek::create(['nama_merek' => 'Suzuki']);
    }
}
