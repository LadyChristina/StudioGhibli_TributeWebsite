var questions = [ //pool of questions, last field is for checking if the question has been picked
	[ "What is 10 + 4?", "12", "14", "16", "21", "B", false ],
	[ "What is 20 - 9?", "7", "13", "9", "11", "D", false ],
	[ "What is 7 x 3?", "21", "24", "25", "30", "A", false ],
	[ "What is 8 / 2?", "10", "2", "4", "6", "C", false ],
	[ "What is 15 / 3?", "5", "3", "10", "7", "A", false ],
	[ "What is 2 + 2 - 1?", "4", "2", "3", "1", "C", false ],
	[ "What is 4 * 20?", "80", "42", "420", "2", "A", false ]
];
var pos = Math.floor(Math.random() * questions.length),count = 0, quiz, quiz_status, question, choice, choices, chA, chB, chC, correct = 0, maxQuestions = 5;

function _(x){
	return document.getElementById(x);
}
function renderQuestion(){
	quiz = _("quiz");
	if(count >= maxQuestions){
		quiz.innerHTML = "<h2>You got "+correct+" out of "+maxQuestions+" questions correct</h2>";
		_("quiz_status").innerHTML = "Quiz Completed";
		count = 0;
		pos = 0;
		correct = 0;
		return false;
	}
	_("quiz_status").innerHTML = "Question "+(count+1)+" of "+maxQuestions;
	question = questions[pos][0];
	questions[pos][6] = true;
	chA = questions[pos][1];
	chB = questions[pos][2];
	chC = questions[pos][3];
	chD = questions[pos][4];
	quiz.innerHTML = "<h3>"+question+"</h3>";
	quiz.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
	quiz.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
	quiz.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>";
	quiz.innerHTML += "<input type='radio' name='choices' value='D'> "+chD+"<br><br>";
	quiz.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
}
function checkAnswer(){
	choices = document.getElementsByName("choices");
	var i;
	for(i=0; i<choices.length; i++){
		if(choices[i].checked){
			choice = choices[i].value;
			break;
		}
	}
	if (i==choices.length) {
		quiz.innerHTML = "<h3>"+question+"</h3>";
		quiz.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
		quiz.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
		quiz.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>";
		quiz.innerHTML += "<input type='radio' name='choices' value='D'> "+chD+"<br><br>";
		quiz.innerHTML += "<div>You must pick an answer.</div><br>";
		quiz.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";
	} else {	
		quiz.innerHTML = "<h3>"+question+"</h3>";
		quiz.innerHTML += ""+chA+"<br>";
		quiz.innerHTML += ""+chB+"<br>";
		quiz.innerHTML += ""+chC+"<br>";
		quiz.innerHTML += ""+chD+"<br><br>";
		if(choice == questions[pos][5]){
			correct++;
			quiz.innerHTML += "<div id='yay'>You are correct.</div><br><br>";
		}else {
			quiz.innerHTML += "<div id='nay'>You are wrong.</div><br><br>";
		}
		count++;
		do {
			pos = Math.floor(Math.random() * questions.length); //random number between 0 and questions.length
		} while (questions[pos][6]);
		quiz.innerHTML += "<button onclick='renderQuestion()'>Next Question</button>";
	}
}
var ele = document.getElementById("quizButt");
ele.onclick = renderQuestion;