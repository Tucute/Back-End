<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'User',
            ],
            [
                'id' => 2,
                'name' => 'Seller',
            ],
            [
                'id' => 3,
                'name' => 'Administrator',
            ]
        ]);
    }
}
