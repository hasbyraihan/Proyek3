<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notas')->insert([
            'kodenota' => 'NO22151101402',
            'kodetenan' => 'Hasbymaret',
            'kodekasir' => 'Ani Hasby',
            'satuan' => 'Bungkus',
            'tanggal' => '27\8 Nov 2023',
            'jumlahbelanja' => '50.000',
            'jam' => '17.00',
            'diskon' => '1',
            'total' => '49.500',
        ]);
    }
}
