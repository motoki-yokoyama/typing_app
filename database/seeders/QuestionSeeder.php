<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Factories;
use DataTime;
use App\Models\Question;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Question::factory()->count(10)->create();
        DB::table('questions')->insert([
            'sentence'=>'800年にフランク王国のカールがレオ3世から帝冠を与えられた',
            //'length'=>'30',
            ]);
        
        DB::table('questions')->insert([
            'sentence'=>'人間失格を書いたのは太宰治',
            //'length'=>'13',
            ]);
        
        DB::table('questions')->insert([
            'sentence'=>'こんにちは',
            //'length'=>'5',
            ]);
            
        DB::table('questions')->insert([
            'sentence'=>'斜陽館は青森県にあります',
            //'length'=>'12',
            ]);
            
            
        DB::table('questions')->insert([
            'sentence'=>'メロスは激怒した。必ず、かの邪智暴虐の王を除かねばならぬと決意した。',
            //'length'=>'33',
            ]);
            
        DB::table('questions')->insert([
            'sentence'=>'おい地獄さいくんだで！',
            //'length'=>'11',
            ]);
            
        DB::table('questions')->insert([
            'sentence'=>'源氏物語は平安時代の貴族文化を反映しています',
            //'length'=>'22',
            ]);
            
        DB::table('questions')->insert([
            'sentence'=>'こころは夏目漱石の代表作です',
            //'length'=>'14',
            ]);
        
        DB::table('questions')->insert([
            'sentence'=>'1303年ボニファティウス8世が憤死した事件はアナーニ事件',
            //'length'=>'5',
            ]);
        
        DB::table('questions')->insert([
            'sentence'=>'自省録を書いたマルクス＝アウレリウス＝アントニヌスはローマ帝国最盛期の皇帝',
            //'length'=>'38',
            ]);
    }
}
