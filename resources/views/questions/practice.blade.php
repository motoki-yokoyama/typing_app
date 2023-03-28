<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>typingPractice</title>
        @vite(['resources/js/app.js'])
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="/js/typing.js"></script>
        <script>
            //var sentence_download=json()
            let problems = ["a","b","c","d","e","f","g","h","i","j"];
            let currentProblemIndex = 0;
        </script>
        
    </head>
    
    <body class="antialiased" onload="showProblem()">
        
        <h1>タイピング練習</h1>
        
        <p id='problem'></p>
        <p><input id='answer'></p>
        <!--入力場所とDBから読み込んだ問題を表示する-->
        <div class='questions'>
            <!--@foreach ($questions as $question)-->
                <!--<p class='question'>{{ $question->sentence}}</p>-->
            <!--    <form action="#" method="get" name="answer_form">-->
            <!--        {{ $question->sentence}}：<input type="text" name="answer">-->
            <!--        <input type="submit" value="" onClick="return check();">-->
            <!--    </form>-->
            <!--@endforeach-->
        </div>
        
        <div id='questions'>
            
        </div>
        
    </body>
</html>