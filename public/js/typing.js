
// 次の問題を表示する
function showProblem() {
  if (currentProblemIndex >= problems.length) {
    // 全問題が終了したら終了メッセージを表示する
    $('#problem').text('全ての問題を終了しました');
    $('#answer').remove();
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


// function buttonClick(e)
// {
//     let button=document.createElement("button");
    
// }


// //問題表示
// function init()
// {
//     //id=questionsのdivタグを変数questions_areaに入れた
//     let questions_area=document.getElementById("questions");
    
//     //問題と入力欄の表示
//     for (let i=0; i<10; i++){
//         let question_area=document.createElement("div");
//         let sentence=document.createElement("p");
//         sentence.textContent='こんにちは'+i;
//         let answer=document.createElement("input");
//         answer.setAttribute("id","question"+i);
//         //let button=document.createElement("button");
//         //button.setAttribute("id","button"+i);
//         //button.addEventListener("click",{handleEvent:buttonClick});
//         question_area.appendChild(sentence);
//         question_area.appendChild(answer);
//         //question_area.appendChild(button);
//         questions_area.appendChild(question_area);
//     }
    
//     questions_area.appendChild(buttonClick());
// }

