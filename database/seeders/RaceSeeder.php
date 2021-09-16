<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    public function run()
    {
        $path = base_path("database/data/races.sql");
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
