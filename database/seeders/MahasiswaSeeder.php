<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Vicky',
            'nim' => '200',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Ponorogo',
            'kota' => 'Ponorogo',
            'email' => 'vicky@gmail.com',
            
        ]);
    }
}
