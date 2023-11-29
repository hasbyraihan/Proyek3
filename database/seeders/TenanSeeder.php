<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tenans')->insert([
            'kodetenan' => 'TK22151101402',
            'namatenan' => 'Hasbymart',
            'notelepon' => '08221511014375',
        ]);
    }
}
