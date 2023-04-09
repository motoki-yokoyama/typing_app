<?php
// integer型の時間データを変換する関数
function convertTime($time)
{
    //timeの中は元が~~:~~.~~で~~~~~~が入っている。1000で割ってm秒にし、60で割って分にする。
    $minutes = floor($time / 1000 /60);
    $seconds = floor($time / 1000 % 60);
    $milliseconds = $time % 100;
    return sprintf('%02d:%02d.%02d', $minutes, $seconds, $milliseconds);
    //
}

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>typingReslts</title>
        @vite(['resources/js/app.js'])
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="/js/typing.js"></script>
    </head>
    
    <body>
        
        <h1>タイピング結果</h1>
        <p>合計文字数: {{ $latestResult->total_characters }}</p>
        <p>時間: {{ convertTime($latestResult->time) }}</p>
        <p>※表示される秒数は.0秒単位で誤差があります</p>
        
        <a href="{{ route('practice') }}" class="button">もう一度プレイする</a>
        
    </body>
</html>