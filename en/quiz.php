<!DOCTYPE html>
<html lang = "en">
  <head>
  	<meta charset="utf-8">
	<meta name="description" content="A site about Studio Ghibli, its people and their inspired creations. Quiz.">		
	<meta name="keywords" content="HTML,CSS">		
	<meta name="author" content="Dimitris Danis, Christina Ovezik, Eva Perontsi">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/ico" href="../images/tot.ico"/>
	<link rel="stylesheet" type="text/css" href="../styles.css"/>  
  	<title> Studio Ghibli </title>
  </head>
  <body id="quiz-body">
	<div id="wrapper">
		<header>
			<a href="index.php">
				<img src="../images/GhibliLogo1.png" alt="StudioGhibli Logo" id="logo">
			</a> 
			<nav id="topnav">
				<div class="leftmenu">
					<ul id="mainmenu">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="history.php">History</a></li>
					  <li><a href="filmography.php">Filmography</a></li>
					  <li><a href="awards.php">Awards</a></li>
					  <li><a href="people.php">People</a></li>
				      <li><a class="active" href="quiz.php">Quiz</a></li>
					  <li><a href="comments.php">Comments</a></li>
					</ul>
				</div>
				<div class="rightmenu">
					<ul id="languagemenu">
					  <li><a rel="alternate" hreflang = "el" href = "../en/quiz.php"> <small>Ελληνικά</small> </a></li>
					  <li><a class="active_language" rel="alternate" hreflang = "en" href = "../en/quiz.php"> <small>English</small> </a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div id = "quizContainer" class = "qContainer">
                        <div id = startQuiz>
					<button id = "startButton" class = "restart"> Start Quiz! </button>
			</div>
				<div id = "questionsContainer" >
					<div class = "title" > Quiz </div>
					<div id = "question" class = "question"></div>
					<label class = "option"><input type = "radio" name = "option" value = "A"  id="radio1" /> <span id="opt1"></span></label>
					<label class = "option"><input type = "radio" name = "option" value = "B" id="radio2"  /> <span id="opt2"></span></label>
					<label class = "option"><input type = "radio" name = "option" value = "C" id="radio3" /> <span id="opt3"></span></label>
					<label class = "option"><input type = "radio" name = "option" value = "D" id="radio4" /> <span id="opt4"></span></label>
					<button id="submit-next" class="next-btn"> </button>
					<div id="notSelected">
					<p > You must pick an answer!  </p>
					</div>
				</div>
			<div id="result" class = "resultContainer">
				<h3 id = "score"> <h3>
				<button id = "restart" class="restart"> Restart </button>
			</div>
			</div>
			

		</main>
		<footer>
			<nav id="botnav">
				<ul class="botmenu">
					<li><a href="index.php">Home</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="filmography.php">Filmography</a></li>
					<li><a href="awards.php">Awards</a></li>
					<li><a href="people.php">People</a></li>
					<li><a href="quiz.php">Quiz</a></li>
					<li><a href="comments.php">Comments</a></li>
					<li><span>&copy; Copyright 2017-18 Ghibli Fans</span></li>
				</ul>
			</nav>
		</footer>
	</div>
	<script type="text/javascript" src="quiz.js"></script>
  </body>
</html>
