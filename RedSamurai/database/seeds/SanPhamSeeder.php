<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('san_pham')->insert([
            'ten_san_pham' => 'Sản Phẩm 01',
            'mo_ta' => '1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.',
            'hinh_anh' => 'menu-00.jpg',
            'danh_gia' => 4,
            'gia_tien' => "10$"
        ]);

        DB::table('san_pham')->insert([
            'ten_san_pham' => 'Sản Phẩm 02',
            'mo_ta' => '2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.',
            'hinh_anh' => 'menu-02.jpg',
            'danh_gia' => 4,
            'gia_tien' => "15$"
        ]);

        DB::table('san_pham')->insert([
            'ten_san_pham' => 'Sản Phẩm 03',
            'mo_ta' => '3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.',
            'hinh_anh' => 'menu-03.jpg',
            'danh_gia' => 4,
            'gia_tien' => "20$"
        ]);

        DB::table('san_pham')->insert([
            'ten_san_pham' => 'Sản Phẩm 04',
            'mo_ta' => '4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.',
            'hinh_anh' => 'menu-04.jpg',
            'danh_gia' => 4,
            'gia_tien' => "25$"
        ]);

        DB::table('san_pham')->insert([
            'ten_san_pham' => 'Sản Phẩm 05',
            'mo_ta' => '5. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore.',
            'hinh_anh' => 'menu-05.jpg',
            'danh_gia' => 4,
            'gia_tien' => "30$"
        ]);
    }
}
