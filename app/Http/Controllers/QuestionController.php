<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function practice(Question $question)
    {
        $test=[0,1,2,3,4,5,6,7,8,9];
        //「resources/views/questions/practice.blade.php」を呼び出す。
        return view('questions/practice')->with(['questions'=>$question->get(),'tests'=>$test]);
    }
}
