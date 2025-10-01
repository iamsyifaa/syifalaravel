<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departemen = [
            ['kodedepartemen'=>'110','nama_departemen' => 'IT'],
            ['kodedeepartemen'=>'111','nama_departemen' => 'Logistics'],
            ['kodedeepartemen'=>'112','nama_departemen' => 'HR'],
        ];
        DB::table('departemen')->insert($departemen);
    }
}
