<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '肉料理'
        ];
        Category::create($param);

        $param = [
            'name' => '魚料理'
        ];
        Category::create($param);

        $param = [
            'name' => 'サラダ'
        ];
        Category::create($param);

        $param = [
            'name' => 'デザート'
        ];
        Category::create($param);
        $param = [
            'name' => 'その他'
        ];
        Category::create($param);
    }
}
