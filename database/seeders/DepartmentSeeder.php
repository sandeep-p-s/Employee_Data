<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Sales and marketing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('departments')->insert([
            'name' => 'Application development',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
