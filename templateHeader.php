<!doctype php>
<html lang="en-US">

<?php
	if (isset($pageName) && isset($currentPath)) {
?>

<header>
	<h1 id="title">Harrison Oest's Website</h1>
</header>
<nav>
	<div class="navbar">
		<ul>
			<?php if($pageName == "index" && $currentPath == "") { ?>
				<a id="active" href="index.php">Home</a>
			<?php } else { ?>
				<a href="../index.php">Home</a>
			<?php } ?>

			<?php if($pageName == "aboutme" && $currentPath == "") { ?>
				<a id="active" href="aboutme/aboutme.php">About Me</a>
			<?php } else { ?>
				<a href="../aboutme/aboutme.php">About Me</a>
			<?php } ?>

			<?php if($pageName == "quiz" && $currentPath == "") { ?>
				<a id="active" href="jquery/quiz.php">jQuery Quiz</a>
			<?php } else { ?>
				<a href="../jquery/quiz.php">jQuery Quiz</a>
			<?php } ?>
			
			<div class='dropdown'>
				<button class='dropdown_button'>Javascript Tutorials
					<i class="fa fa-caret-down"></i>
				</button>
				<div class='dropdown_content'>
					<?php if($pageName == "jskeyboard" && $currentPath == "") { ?>
						<a id="active" href="javascript/jskeyboard.php">Keyboard Driver</a>
					<?php } else { ?>
						<a id="active" href="../javascript/jskeyboard.php">Keyboard Driver</a>
					<?php } ?>

					<?php if($pageName == "jsmouse" && $currentPath == "") { ?>
						<a id="active" href="javascript/jsmouse.php">Smiley Mouse</a>
					<?php } else { ?>
						<a href="../javascript/jsmouse.php">Smiley Mouse</a>
					<?php }} ?>
				</div>
			</div>
		<div class='dropdown'>
			<button class='dropdown_button'>CSS Tutorials
				<i class="fa fa-caret-down"></i>                                      
			</button>
			<div class='dropdown_content'>
					<a href='../CSS_tutorials/turtlecoders.html'>Turtle Coders</a>
					<a href='../CSS_tutorials/posEx.html'>Position Example</a>
					<a href='../CSS_tutorials/floatExBoxes.html'>The Box Model</a>
					<a href='../CSS_tutorials/clearEx.html'>Float and Clear</a>
			</div>
		</div>
		<div class='dropdown'>
			<button class='dropdown_button'>PHP
				<i class="fa fa-caret-down"></i>                                      
			</button>
			<div class='dropdown_content'>
					<a href='../php/form.php'>Form</a>
			</div>
		</div>
	</div>
</nav>