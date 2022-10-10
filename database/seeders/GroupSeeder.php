<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // for($i = 1; $i <= 10; $i++){
        //     DB::table('groups')->insert([
        //         'nombre' => "tal $i",
        //         'clave' => "tal $i"
        //     ]);
        // }

        Group::factory(5)->create();
    }
}