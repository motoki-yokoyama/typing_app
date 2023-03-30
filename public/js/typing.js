

//タイマー系
function startStopwatch(display) {
  var startTime = new Date().getTime();
  var elapsed = 0;

  // 時間を表示する関数
  function showTime() {
    elapsed = new Date().getTime() - startTime;
    var minutes = Math.floor((elapsed / 1000 / 60) % 60);
    var seconds = Math.floor((elapsed / 1000) % 60);
    var milliseconds = Math.floor((elapsed % 1000) / 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    milliseconds = milliseconds < 10 ? "0" + milliseconds : milliseconds;

    display.textContent = minutes + ":" + seconds + "." + milliseconds;
  }

  // ストップウォッチを開始する関数
  function start() {
    startTime = new Date().getTime() - elapsed;
    timerId = setInterval(showTime, 10);
  }

  // ストップウォッチを停止する関数
  function stop() {
    clearInterval(timerId);
  }

  // ストップウォッチをリセットする関数
  function reset() {
    stop();
    elapsed = 0;
    display.textContent = "00:00.00";
  }

  // 関数を返す
  return {
    start: start,
    stop: stop,
    reset: reset
  };
}

//問題表示系
// 次の問題を表示する
function showProblem() {
  if (currentProblemIndex >= problems.length) {
    // 全問題が終了したら終了メッセージを表示する
    $('#problem').text('全ての問題を終了しました');
    $('#answer').remove();
    stopwatch.stop(); // ストップウォッチを停止する
    return;
  }

  // 問題をHTMLに表示する
  $('#problem').text(problems[currentProblemIndex]);

  // 解答欄をHTMLに表示する
  $('#answer').val('');
  $('#answer').removeClass('is-invalid');
  $('#answer').off('keyup');
  $('#answer').on('keyup', function(event) {
    if (event.keyCode === 13) {
      checkAnswer();
    }
  });
}

// 解答をチェックする
function checkAnswer() {
  let answer = $('#answer').val();

  if (answer === problems[currentProblemIndex]) {
    // 入力内容が合っていた場合、次の問題を表示する
    currentProblemIndex++;
    showProblem();
  } else {
    // 入力内容が間違っていた場合、テキストボックスを赤に変える
    $('#answer').addClass('is-invalid');
    alert('miss');
  }
}

