<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'オムライス.jpg',
            'path' => 'storage\meal-imges\オムライス.jpg'
        ];
        Image::create($param);
        $param = [
            'name' => 'ハンバーグ.jpg',
            'path' => 'storage\meal-imges\ハンバーグ.jpg'
        ];
        Image::create($param);
        $param = [
            'name' => 'さらだ.jpg',
            'path' => 'storage\meal-imges\さらだ.jpg'
        ];
        Image::create($param);
    }
}
