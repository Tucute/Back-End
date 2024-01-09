<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rating extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rating')->insert([
            [
                "id" => 1,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4,
                "user_id" => 4,
                "product_id" => 1
            ],
            [
                "id" => 2,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4,
                "user_id" => 3,
                "product_id" => 2
            ],
            [
                "id" => 3,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 5,
                "user_id" => 1,
                "product_id" => 3
            ],
            [
                "id" => 4,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4.5,
                "user_id" => 4,
                "product_id" => 4
            ],
            [
                "id" => 5,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4,
                "user_id" => 2,
                "product_id" => 5
            ],
            [
                "id" => 6,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4,
                "user_id" => 1,
                "product_id" => 6
            ],
            [
                "id" => 7,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 5,
                "user_id" => 7,
                "product_id" => 7
            ],
            [
                "id" => 8,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4.5,
                "user_id" => 4,
                "product_id" => 8
            ],
            [
                "id" => 9,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4,
                "user_id" => 7,
                "product_id" => 9
            ],
            [
                "id" => 10,
                "comment" => "Cây đẹp chất lượng và đặc biệt là dễ chăm sóc",
                "rate" => 4.5,
                "user_id" => 9,
                "product_id" => 10
            ],
        ]);
    }
}
