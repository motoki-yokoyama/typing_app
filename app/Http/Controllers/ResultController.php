<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\User;
use Illuminate\Support\Facades\Validator; // Validatorをインポート
use Illuminate\Support\Facades\Auth; // Authをインポート


class ResultController extends Controller
{
    // public function index(Result $result)
    // {
    //     return $result->get();
    // }
    
    //結果の送信
    public function store(Request $request)
    {
        //Resultテーブルに対応したインスタンスの作成
        $result=new Result();
        //リクエストされたtotal_charactersを取得し、インスタンスのプロパティに設定する
        $result->total_characters=$request->input('total_characters');
        $result->time=$request->input('time');
        
        //現在のログインユーザーのidを取得
        $user_id=Auth::id();
        
        //user_idをResultインスタンスに関連付ける
        $result->user_id=$user_id;
        
        $result->save();
        
        //return redirect('/questions/result')->with(['success'=>true,'result'=>$result]);
        
        return response()->json(['success'=>true]);
    }
    
    public function result(request $request)
    {
        // 現在のユーザーを取得
        $user = Auth::user();

        // ユーザーの最新のリザルトを取得
        $latestResult = $user->results()->latest()->first();
    
        // Viewにリザルトを渡す
        return view('questions/result', ['latestResult' => $latestResult]);
    }
}
