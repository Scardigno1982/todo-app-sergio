<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'id_user ' => '1',
            'name' => 'tarea',
            'description' => 'daedae',
            'id_statu ' => '1',
        ]);
    }
}
