<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Name'=> 'John Due',
            'Fk_department'=> '1',
            'Fk_designation'=> '1',
            'Phone_number'=> '8745632178',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'Name'=> 'Tommy Mark',
            'Fk_department'=> '2',
            'Fk_designation'=> '2',
            'Phone_number'=> '9874526341',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'Name'=> 'John Due',
            'Fk_department'=> '1',
            'Fk_designation'=> '1',
            'Phone_number'=> '8745632178',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'Name'=> 'Tommy Mark',
            'Fk_department'=> '2',
            'Fk_designation'=> '2',
            'Phone_number'=> '9874526341',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
