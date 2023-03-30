<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function practice()
    {
        //inRandomOrder()は、Eloquentクエリビルダーのメソッドで、ランダムな順序でデータを取得するために使用
        //take()は、Eloquentクエリビルダーのメソッドで、指定された数のデータを取得するために使用
        //pluck()は、コレクションのメソッドで、指定されたカラムの値を抽出して新しいコレクションを作成するために使用
        $questions=Question::inRandomOrder()->take(3)->pluck('sentence');
        //「resources/views/questions/practice.blade.php」を呼び出す。
        return view('questions/practice',['questions'=>$questions]);
    }
}
