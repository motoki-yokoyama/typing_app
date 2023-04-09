<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <title>typingPractice</title>
        @vite(['resources/js/app.js'])
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="/js/typing.js"></script>
    </head>
    
    <body class="antialiased">
        
        <h1>タイピング練習</h1>
        
        <div id='timer'>00:00</div>
        <!--<button id='start'>start</button>-->
        <button id='reset'>reset</button>
        
        <p id='problem'></p>
        <p><input id='answer'></p>
        <div id='questions'>
        </div>
        
        <script>
            //問題表示系
            var problems=@json($questions);
            let currentProblemIndex = 0;
            
            //タイマー系
            var elapsed = 0;
            var display=document.getElementById("timer");
            var stopwatch=startStopwatch(display);
            
            var resetButton=document.getElementById("reset");
            
            resetButton.addEventListener("click", stopwatch.reset); 
            
            window.onload=function(){
                showProblem();
                stopwatch.start();
            }
        </script>
        
    </body>
</html>