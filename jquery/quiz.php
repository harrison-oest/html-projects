<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest"/>
	<meta name="description" content="This page is all about my life." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../csci445.css"/>
	<link rel="stylesheet" type="text/css" href="quiz.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script type="text/javascript" src="quiz.js"></script>
	<title>All About Harrison Oest</title>
</head>

<?php $pageName = "quiz"; ?>
<?php $currentPath = "jquery/"; ?>

<body style="background-color: #8c9dad">
<?php include "../templateHeader.php"; ?>
<div id="quiz_div">
	<aside>
		<h2>Guessed:</h2>
		<ul>
			<li id="pathfinder_answer"></li>
			<li id="corolla_answer"></li>
			<li id="pilot_answer"></li>
			<li id="sequoia_answer"></li>
		</ul>
	</aside>
	<div class="questions">
		<h2>What Do You Know About Cars?</h2>
			<h3>Question</h3>
				<div class="question_box"></div>
			<h3>Answer</h3>
				<div class="answer_box">
	                <label for="check_true">True</label>
	                <input type="radio" id="check_true" name="true" value="check_true">
	                <label for="check_false">False</label>
	                <input type="radio" id="check_false" name="false" value="check_false"><br/>
	                <button id="check_answer">Check Answer</button>
	                <p id="wrong_answer" style="color:red"></p>
	                <p id="right_answer" style="color:green"></p>
            	</div>
            <h3>Select Car Model</h3>
	            <div class="car_buttons">
	                <ul>
	                    <li><button data-answered="false" id="pathfinder">Pathfinder</button></li>
	                    <li><button data-answered="false" id="corolla">Corolla</button></li>
	                    <li><button data-answered="false" id="pilot">Pilot</button></li>
	                    <li><button data-answered="false" id="sequoia">Sequoia</button></li>
	                </ul>
	            </div>
	</div>
</div>

<div id="game_over">
	<p id="end_game_text">Game Over</p>
	<p id="surprise">(Double click for a surprise &#128521;)</p><br>
	<p id="reset">Or double-click the Guessed box to reload the page and play again!</p>
</div>
<?php include "../templateFooter.php"; ?>
</body>
</html>