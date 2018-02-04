<?php

//saving the comments to the database
function setComment($connection){
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitButt'])){
		if($_POST['umail']!=""){
			$umail = $_POST['umail'];
			//$umail_safe = mysqli_real_escape_string($umail);
			
		} else {
			$umail = 'Anon';
		}
		$text = $_POST['message'];
		$u = addslashes($umail);
		$t = addslashes($text);
		//$text_safe = mysqli_real_escape_string($text);
			
			
		$sql = "INSERT INTO comments(umail, comment) VALUES('$u', '$t')";	
		$result = mysqli_query($connection,$sql);
	}

	header("Location: comments.php");
	header("HTTP/1.1 303 See Other");
	//exit();
}



function getComment($connection){
	
	$limit = 10;
	
	if(!isset($_GET['page'])){
    	$page = 1;
	} else {
		$page=$_GET['page'];
	}

	
	$sql = "SELECT * FROM comments";
	$all_comments = mysqli_query($connection,$sql);	
	$number_of_comments =mysqli_num_rows($all_comments);
	$number_of_pages  = ceil($number_of_comments /$limit);
	
	
	
	$start = ($page-1)*$limit;	
		

	$sql = "SELECT * FROM comments ORDER BY cid DESC LIMIT ".$start.','. $limit;
	$query = mysqli_query($connection,$sql);
		
	while($row = mysqli_fetch_array($query)){
    	echo"<div class='comment-box'>";
        	echo "User: ".$row['umail']." said: <br>";
			echo " ".$row['comment'];
        echo "</div>";
	}
	echo '<div class = pages>';
	for ($current_page = 1; $current_page<=$number_of_pages; $current_page++){
    	echo '<a href= "../en/comments.php?page=' . $current_page . ' ">' . $current_page . '</a> '; 
	}
	echo '</div>';
	exit;
}