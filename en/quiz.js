	var questions;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			questions = JSON.parse(this.responseText);

		}
	};
	xmlhttp.open("GET", 'questions.php?uniqueParamVal=' + new Date().getTime(), true);
	xmlhttp.send();


var pos,count,selected, correctAnswer, correct, maxQuestions=5;

var currentQuestion  = 0;
var score = 0;

var startButton = document.getElementById('startButton');
var container = document.getElementById('questionsContainer');
var questionEl = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var radio1 = document.getElementById('radio1');
var radio2 = document.getElementById('radio2');
var radio3 = document.getElementById('radio3');
var radio4 = document.getElementById('radio4');
var nextButton = document.getElementById('submit-next');
var resultCont = document.getElementById('result');
var score = document.getElementById('score');
var restartButton = document.getElementById('restart');


function start() {
	count = 1;
	correct = 0;
	loadQuestion();
}


function loadQuestion(){
	do 
	{
		pos = Math.floor(Math.random() * questions.length); //random number between 0 and questions.length
	} while (questions[pos].picked);
	var question = questions[pos]
	questions[pos].picked = true;
	questionEl.textContent = count +'. ' + question.question;
	opt1.textContent = question.ch1;
	opt2.textContent = question.ch2;
	opt3.textContent = question.ch3;
	opt4.textContent = question.ch4;
        radio1.value = question.ch1;
	radio2.value = question.ch2;
	radio3.value = question.ch3;
	radio4.value = question.ch4;
	nextButton.innerHTML = "Submit";
}

function submitOrNext() {
	if (nextButton.innerHTML == "Submit")
	{
		submitAnswer()
	}
	else if (nextButton.innerHTML == "Next")
	{
		nextQuestion()
	}
	else if (nextButton.innerHTML == "Finish")
	{
		showStats()
	}
}

function submitAnswer() {

	selected = document.querySelector('input[type=radio]:checked');
	var notSelected = document.getElementById("notSelected");
	if (!selected)
	{
		notSelected.style.display = 'block';
	}
	else
	{
                var radios = document.querySelectorAll('input[type=radio]');
	        for (i = 0; i < radios.length; i++) {
	              radios[i].disabled = true;
	        }
		notSelected.style.display = 'none';
		correctAnswer = questions[pos].correct;
		if(selected.value == correctAnswer){
		correct++;
		selected.parentNode.className = "greenOption";
		}
		else 
		{
			selected.parentNode.className = "redOption";
			var correctButton = document.querySelector('input[value = ' + CSS.escape(correctAnswer) + ']');
			correctButton.parentNode.className = "greenOption";
		}
		count++;
		if(count > maxQuestions){
			nextButton.innerHTML = "Finish";
		}
		else{
			nextButton.innerHTML = "Next";
		}
	}
}

function nextQuestion() {
	var radios = document.querySelectorAll('input[type=radio]');
	for (i = 0; i < radios.length; i++) {
	  radios[i].disabled = false;
	}
	selected.parentNode.className = "option";
	var correctButton = document.querySelector('input[value = ' + CSS.escape(correctAnswer) + ']');
	selected.checked = false;
	correctButton.parentNode.className = "option";
	loadQuestion();
}

function showStats(){
	container.style.display = 'none';
	resultCont.style.display = 'block';
	score.textContent = 'Your score: ' + correct + ' / ' + maxQuestions;
}

function restart() {
	count = 1;
	correct = 0;
	pos = Math.floor(Math.random() * questions.length);
	resultCont.style.display = 'none';
	var radios = document.querySelectorAll('input[type=radio]');
	for (i = 0; i < radios.length; i++) {
	  radios[i].disabled = false;
	}
	selected.parentNode.className = "option";
	var correctButton = document.querySelector('input[value = ' + CSS.escape(correctAnswer) + ']');
	selected.checked = false;
	correctButton.parentNode.className = "option";
	for (i = 0; i < questions.length; i++) {
	  questions[i].picked = false;
	}
	enterQuiz();
}

function enterQuiz(){
	startButton.style.display = 'none';
	container.style.display = 'block';
	start();
}

 nextButton.addEventListener("click",submitOrNext);
        restartButton.addEventListener("click",restart);
        startButton.addEventListener("click",enterQuiz);
