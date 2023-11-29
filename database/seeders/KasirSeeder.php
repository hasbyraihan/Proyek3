<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kasirs')->insert([
            'kodekasir' => 'KS[NIM]02',
            'namakasir' => 'Budi Hasby',
            'notelp' => '08221511014735',
        ]);
    }
}
