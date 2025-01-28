<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '腕時計',
            'condition_id' => '1',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'price' => 15000,
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'HDD',
            'condition_id' => '2',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'price' => 5000,
            'description' => '高速で信頼性の高いハードディスク',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '玉ねぎ3束',
            'condition_id' => '3',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'price' => 300,
            'description' => '新鮮な玉ねぎ3束のセット',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '革靴',
            'condition_id' => '4',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'price' => 4000,
            'description' => 'クラシックなデザインの革靴',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ノートPC',
            'condition_id' => '1',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'price' => 45000,
            'description' => '高性能なノートパソコン',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'マイク',
            'condition_id' => '2',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'price' => 8000,
            'description' => '高音質のレコーディング用マイク',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ショルダーバッグ',
            'condition_id' => '3',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'price' => 3500,
            'description' => 'おしゃれなショルダーバッグ'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'タンブラー',
            'condition_id' => '4',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'price' => 500,
            'description' => '使いやすいタンブラー',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'コーヒーミル',
            'condition_id' => '1',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'price' => 4000,
            'description' => '手動のコーヒーミル',
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'メイクセット',
            'condition_id' => '2',
            'img' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'price' => 2500,
            'description' => '便利なメイクアップセット',
        ];
        DB::table('products')->insert($param);

    }
}
