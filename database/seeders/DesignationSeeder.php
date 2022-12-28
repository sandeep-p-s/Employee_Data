<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'name' => 'Marketing Manager',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('designations')->insert([
            'name' => 'Mobile Application Dev.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
