<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id" => 1,
                "name" => "A Tien",
                "email" => "tien@gmail.com",
                "avatar" => "https://i.pinimg.com/564x/df/ce/a7/dfcea7989195d3273c2bcb367fca0a83.jpg",
                "phone" => "0936473634",
                "isActive" => true,
                "password" => "335456dfdf",
                "role_id" => 1,
            ],
            [
                "id" => 2,
                "name" => "A Quang",
                "email" => "quang@gmail.com",
                "avatar" => "https://png.pngtree.com/png-clipart/20190904/original/pngtree-cartoon-couple-avatar-design-material-png-image_4460214.jpg",
                "phone" => "0463434355",
                "isActive" => true,
                "password" => "quang@1234",
                "role_id" => 1,
            ],
            [
                "id" => 3,
                "name" => "Tran Quoc Huu",
                "email" => "huu@gmail.com",
                "avatar" => "https://anhcuoiviet.vn/wp-content/uploads/2022/11/avatar-dep-dang-yeu-nu-5.jpg",
                "phone" => "0385456789",
                "isActive" => true,
                "password" => "huu08232",
                "role_id" => 3,
            ],
            [
                "id" => 4,
                "name" => "A An Tu",
                "email" => "tu@gmail.com",
                "avatar" => "https://www.prettywoman.vn/wp-content/uploads/2023/06/hinh-anh-avatar-nam-1-600x600.jpg",
                "phone" => "0943487676",
                "isActive" => true,
                "password" => "34354646",
                "role_id" => 2
            ],
            [
                "id" => 5,
                "name" => "Dam Long Thien",
                "email" => "Thien@gmail.com",
                "avatar" => "https://cdn.sforum.vn/sforum/wp-content/uploads/2023/11/avatar-dep-105.jpg",
                "phone" => "0454534389",
                "isActive" => true,
                "password" => "thiendamdao13",
                "role_id" => 2
            ],
            [
                "id" => 6,
                "name" => "Truong Thanh Luan",
                "email" => "Luan@gmail.com",
                "avatar" => "https://bizweb.dktcdn.net/100/438/408/files/avatar-hai-yody-vn-70.jpg?v=1700117706562",
                "phone" => "0454352436",
                "isActive" => true,
                "password" => "Luanhamdao98",
                "role_id" => 2
            ],
            [
                "id" => 7,
                "name" => "Dinh Ngoc Son",
                "email" => "Son@gmail.com",
                "avatar" => "https://demoda.vn/wp-content/uploads/2022/01/avatar-den-trang-buon-600x600.jpg",
                "phone" => "0534347654",
                "isActive" => true,
                "password" => "233sON444",
                "role_id" => 2
            ],
            [
                "id" => 8,
                "name" => "Ho Thi Huong",
                "email" => "Huong@gmail.com",
                "avatar" => "https://live.staticflickr.com/4125/35621911731_185633817e.jpg",
                "phone" => "0244315456",
                "isActive" => true,
                "password" => "huongdaumoi03",
                "role_id" => 2
            ],
            [
                "id" => 9,
                "name" => "Pham Dinh Suu",
                "email" => "Suu@gmail.com",
                "avatar" => "https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/07/avatar-dep-29.jpg",
                "phone" => "0835465657",
                "isActive" => true,
                "password" => "deptraikhoiche26",
                "role_id" => 2
            ],
            [
                "id" => 10,
                "name" => "Do Thi Hiep",
                "email" => "Hiep@gmail.com",
                "avatar" => "https://demoda.vn/wp-content/uploads/2022/02/avatar-hai-600x600.jpg",
                "phone" => "0434354678",
                "isActive" => true,
                "password" => "hiepga22",
                "role_id" => 2
                ]
        ]);
    }
}
