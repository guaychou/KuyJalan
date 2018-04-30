<?php

use Illuminate\Database\Seeder;
use App\Kota;
use App\Kategori;
class TempatWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $kota = Kota::all();
      $kota->each(function($kota){
          factory('App\TempatWisata', 5)->create([
            'id_kota' => $kota->id,
          ]);
      });

      $kategori = Kategori::all();
      $kategori->each(function($kategori){
          factory('App\TempatWisata', 5)->create([
            'id_kategori' => $kategori->id
          ]);
      });
    }
}
