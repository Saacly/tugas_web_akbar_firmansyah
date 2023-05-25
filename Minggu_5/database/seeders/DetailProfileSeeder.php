<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //insert data ke table pegawai
        DB::table('detail_profile')->insert([
            'addres'=> 'jember',
            'nomor_tlp' => '08xxxxx',
            'ttl' => '2003-08-15',
            'foto' => 'picture.png'
        ]);
    }
}
