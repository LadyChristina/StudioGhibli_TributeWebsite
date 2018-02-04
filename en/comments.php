<?php
    require_once '../dbHandling.php';
	require_once '../commentsFunc.php';
?>


<!DOCTYPE html>
<html lang = "en">
  <head>
  	<meta charset="utf-8">
	<meta name="description" content="A site about Studio Ghibli, its people and their inspired creations. Comment section.">		
	<meta name="keywords" content="HTML,CSS,PHP">		
	<meta name="author" content="Dimitris Danis, Christina Ovezik, Eva Perontsi">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/ico" href="../images/tot.ico"/>
	<link rel="stylesheet" type="text/css" href="../styles.css"/>  
  	<title> Studio Ghibli </title>
  </head>
  <body id="comments-body">
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
					  <li><a href="quiz.php">Quiz</a></li>
					  <li><a  class="active" href="comments.php">Comments</a></li>
					</ul>
				</div>
				<div class="rightmenu">
					<ul id="languagemenu">
					  <li><a rel="alternate" hreflang = "el" href = "../el/home.php"> <small>Ελληνικά</small> </a></li>
					  <li><a class="active_language" rel="alternate" hreflang = "en" href = "../en/home.php"> <small>English</small> </a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div class="transbox" id="trans-comments">
				<h1>
				Express your love for studio Ghibli 
				</h1>
				<div id="respond">
					<h3> Share your thoughts</h3>
					
					<?php

						echo "<form method = 'POST' action = '".setComment($connection)."'>
						
							<label for='message'>Your comment:</label>						
							<textarea name='message' id='message' required='required' placeholder='Write your comment here'></textarea>

							<label for='umail'> E-mail : </label>
							<input type='email' name='umail' id='umail' placeholder='optional' >

							<button id='submitButt' name='submitButt' type='submit'>Comment</button>


							</form>";
					?>					
				</div>
			</div>
			<div class="transbox" id="comments-list">
				<?php
					getComment($connection);
				?>
			</div>	
		</main>
		<footer>
			<nav id="botnav">
				<ul class="botmenu">
					<li><a href="home.php">Home</a></li>
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
  </body>
</html>
