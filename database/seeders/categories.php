<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "id" => 1,
                "name" => "Bonsai tam đa"
            ],
            [
                "id" => 2,
                "name" => "Bonsai thác đổ"
            ],
            [
                "id" => 3,
                "name" => "Bonsai đại lâm mộc"
            ],
            [
                "id" => 4,
                "name" => "Bonsai song thụ"
            ],
            [
                "id" => 5,
                "name" => "Bonsai đại trượng phu"
            ],
            [
                "id" => 6,
                "name" => "Bonsai ngũ phúc"
            ]
        ]);
    }
}
