<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'オムライス',
            'category_id' => 1,
            'user_id' =>1,
            'image_id' =>1,
            'cost' => '500',
            'difficulty' => 1,
            'ingredient' => '卵　4個温かいご飯　茶碗2杯分（約300g）鶏もも肉　1/3枚（約80g）玉ねぎ　1/4個パセリのみじん切り、牛乳　各大さじ2',
            'way' => "1.ケチャップライスを作る2.卵に火を通す3.ケチャップライスを卵で巻く4.盛り付ける",
        ];
        Meal::create($param);
        $param = [
            'name' => 'ハンバーグ',
            'category_id' => 2,
            'user_id' =>1,
            'image_id' =>2,
            'cost' => '500',
            'difficulty' => 1,
            'ingredient' => '牛豚ひき肉：250g玉ねぎ：大1/2個牛乳：大さじ4パン粉：大さじ4塩・コショー：各少々GABANナツメグ：2～3振り（お好みで調整）サラダ油：適量',
            'way' =>"たまねぎをみじん切りにする｡フライパンにAを入れて中火で炒める｡2ボールに1とBを入れて粘りけが出るまで捏ねる｡中側の空気を追い出して小判の形に整える3フタをして弱火で焼く｡何回もひっくり返して焦げ目をつける｡お疲れ様でした♪",
        ];
        Meal::create($param);
        $param = [
            'name' => 'サラダ',
            'category_id' => 3,
            'user_id' =>1,
            'image_id' =>3,
            'cost' => '700',
            'difficulty' => 3,
            'ingredient' => 'ドレッシング、レタス　トマト　ブロッコリー　など',
            'way' => '野菜を切ってドレッシングウをかけます。おさらに盛り付けたら出来上がり。',
        ];
        Meal::create($param);
    }
}
