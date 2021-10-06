<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TimeOffDescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('time_off_desc')->insert([
            'description'=>'sick'
        ]);
        
        DB::table('time_off_desc')->insert([
            'description'=>'pregnant'
        ]);
        DB::table('time_off_desc')->insert([
            'description'=>'dead'
        ]);
        DB::table('time_off_desc')->insert([
            'description'=>'vacation'
        ]);
        //
    }
}
