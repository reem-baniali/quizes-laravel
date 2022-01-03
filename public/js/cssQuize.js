let cssQuestions = []
fetch('./json/cssQuize.json')
  .then((res) => {
    return res.json()
  })
  .then((loadcssQuestions) => {
    console.log(loadcssQuestions)
    cssQuestions = loadcssQuestions
  })
console.log(cssQuestions)

//selecting all required elements
const info_box = document.querySelector('.info_box')
const exit_btn = info_box.querySelector('.buttons .quit')
const continue_btn = info_box.querySelector('.buttons .restart')
const quiz_box = document.querySelector('.quiz_box')
const result_box = document.querySelector('.result_box')
const option_list = document.querySelector('.option_list')
const time_line = document.querySelector('header .time_line')
const timeText = document.querySelector('.timer .time_left_txt')
const timeCount = document.querySelector('.timer .timer_sec')

// if startQuiz button clicked
info_box.classList.add('activeInfo') //show info box

// if continueQuiz button clicked
continue_btn.onclick = () => {
  info_box.classList.remove('activeInfo') //hide info box
  quiz_box.classList.add('activeQuiz') //show quiz box
  showQuetions(0) //calling showQestions function
  queCounter(1) //passing 1 parameter to queCounter
  startTimer(15) //calling startTimer function
  startTimerLine(0) //calling startTimerLine function
}

let timeValue = 15
let que_count = 0
let que_numb = 1
let userScore = 0
let counter
let counterLine
let widthValue = 0

const restart_quiz = result_box.querySelector('.buttons .restart')
const quit_quiz = result_box.querySelector('.buttons .quit')

// if restartQuiz button clicked
restart_quiz.onclick = () => {
  quiz_box.classList.add('activeQuiz') //show quiz box
  result_box.classList.remove('activeResult') //hide result box
  timeValue = 15
  que_count = 0
  que_numb = 1
  userScore = 0
  widthValue = 0
  showQuetions(que_count) //calling showQestions function
  queCounter(que_numb) //passing que_numb value to queCounter
  clearInterval(counter) //clear counter
  clearInterval(counterLine) //clear counterLine
  startTimer(timeValue) //calling startTimer function
  startTimerLine(widthValue) //calling startTimerLine function
  timeText.textContent = 'Time Left' //change the text of timeText to Time Left
  next_btn.classList.remove('show') //hide the next button
}

// if quitQuiz button clicked
quit_quiz.onclick = () => {
  window.location.reload() //reload the current window
}

const next_btn = document.querySelector('footer .next_btn')
const bottom_ques_counter = document.querySelector('footer .total_que')

// if Next Que button clicked
next_btn.onclick = () => {
  if (que_count < cssQuestions.length - 1) {
    //if question count is less than total question length
    que_count++ //increment the que_count value
    que_numb++ //increment the que_numb value
    showQuetions(que_count) //calling showQestions function
    queCounter(que_numb) //passing que_numb value to queCounter
    clearInterval(counter) //clear counter
    clearInterval(counterLine) //clear counterLine
    startTimer(timeValue) //calling startTimer function
    startTimerLine(widthValue) //calling startTimerLine function
    timeText.textContent = 'Time Left' //change the timeText to Time Left
    next_btn.classList.remove('show') //hide the next button
  } else {
    clearInterval(counter) //clear counter
    clearInterval(counterLine) //clear counterLine
    showResult() //calling showResult function
  }
}

// getting cssQuestions and options 
function showQuetions(index) {
  const que_text = document.querySelector('.que_text')

  //creating a new span and div tag for question and option
  let que_tag =
    '<span>' +
    cssQuestions[index].numb +
    '. ' +
    cssQuestions[index].question +
    '</span>'
  let option_tag =
    '<div class="option"><span>' +
    cssQuestions[index].options[0] +
    '</span></div>' +
    '<div class="option"><span>' +
    cssQuestions[index].options[1] +
    '</span></div>' +
    '<div class="option"><span>' +
    cssQuestions[index].options[2] +
    '</span></div>' +
    '<div class="option"><span>' +
    cssQuestions[index].options[3] +
    '</span></div>'
  que_text.innerHTML = que_tag //adding new span tag inside que_tag
  option_list.innerHTML = option_tag //adding new div tag inside option_tag

  const option = option_list.querySelectorAll('.option')

  // set onclick attribute to all available options
  for (i = 0; i < option.length; i++) {
    option[i].setAttribute('onclick', 'optionSelected(this)')
  }
}

let arr1 = []
//if user clicked on option
function optionSelected(answer) {
  answer.style.background = '#bababa'
  console.log(answer)
  clearInterval(counter) //clear counter
  clearInterval(counterLine) //clear counterLine
  let userAns = answer.textContent //getting user selected option
  let correcAns = cssQuestions[que_count].answer //getting correct answer from array
  const allOptions = option_list.children.length //getting all option items


//save user answer in local storage 
  localStorage.setItem('userAnswers', JSON.stringify(userAns))
  let ansArray = localStorage.getItem('userAnswers')
    ? JSON.parse(localStorage.getItem('userAnswers'))
    : []
  console.log(ansArray)

  arr1.push(ansArray)
  if (arr1.length == 7) {
    localStorage.setItem('userAnswerArray', arr1)
  }

  console.log(arr1)

  if (userAns == correcAns) {
    //if user selected option is equal to json correct answer
    userScore += 1 //upgrading score value with 1
  
    console.log('Correct Answer')
    console.log('Your correct answers = ' + userScore)
  }

  for (i = 0; i < allOptions; i++) {
    option_list.children[i].classList.add('disabled') //once user select an option then disabled all options
  }

  next_btn.classList.add('show') //show the next button if user selected any option
}

function showResult() {
  info_box.classList.remove('activeInfo') //hide info box
  quiz_box.classList.remove('activeQuiz') //hide quiz box
  result_box.classList.add('activeResult') //show result box
  const scoreText = result_box.querySelector('.score_text')
  let imgResult = document.getElementById('img-result')
  if (userScore > 3) {
    // if user scored more than 3
    //creating a new span tag and passing the user score number and total question number
    let scoreTag =
      '<span>and congrats! , You got <p>' +
      userScore +
      '</p> out of <p>' +
      cssQuestions.length +
      '</p></span>'
    scoreText.innerHTML = scoreTag //adding new span tag inside score_Text
    document.querySelector('.activeResult').style.background = '#13c813'
    document.querySelector('.complete_text').style.color = 'white'
    document.querySelector('.score_text').style.color = 'white'

    imgResult.src = './imgs/like.gif'
  } else {
    // if user scored less than 1
    let scoreTag =
      '<span>and sorry , You got only <p>' +
      userScore +
      '</p> out of <p>' +
      cssQuestions.length +
      '</p></span>'
    scoreText.innerHTML = scoreTag
    document.querySelector('.activeResult').style.background = 'red'
    document.querySelector('.complete_text').style.color = 'white'
    document.querySelector('.score_text').style.color = 'white'
    imgResult.src = './imgs/broken-heart.gif'
  }
}

function startTimer(time) {
  counter = setInterval(timer, 1000)
  function timer() {
    timeCount.textContent = time //changing the value of timeCount with time value
    time-- //decrement the time value

    if (time < 9) {
      //if timer is less than 9
      let addZero = timeCount.textContent
      timeCount.textContent = '0' + addZero //add a 0 before time value
    }
    if (time < 0) {
      //if timer is less than 0
      clearInterval(counter) //clear counter

      timeText.textContent = 'Time Off' //change the time text to time off
      const allOptions = option_list.children.length //getting all option items
      for (i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add('disabled') //once user select an option then disabled all options
      }
      next_btn.classList.add('show') //show the next button if user selected any option
    }
  }
}

function startTimerLine(time) {
  counterLine = setInterval(timer, 29)
  function timer() {
    time += 1 //upgrading time value with 1
    time_line.style.width = time + 'px' //increasing width of time_line with px by time value
    if (time > 549) {
      //if time value is greater than 549
      clearInterval(counterLine) //clear counterLine
    }
  }
}

function queCounter(index) {
  //creating a new span tag and passing the question number and total question
  let totalQueCounTag =
    '<span><p>' +
    index +
    '</p> of <p>' +
    cssQuestions.length +
    '</p> Questions</span>'
  bottom_ques_counter.innerHTML = totalQueCounTag //adding new span tag inside bottom_ques_counter
}

let showAnswers = document.getElementById('showAnswers')
showAnswers.onclick = function () {
  window.open('./cssAnswers.html', '_self')
}