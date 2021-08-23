<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 20; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('buku')->insert([
    			'judul'             => $faker->sentence,
    			'tahun_terbit'      => $faker->year,
    			'penerbit'          => $faker->name,
    			'id_pengarang'      => $faker->numberBetween(1,10),
                'created_at'        => now(),
                'updated_at'        => now(),
    		]);
 
    	}
    }
}
