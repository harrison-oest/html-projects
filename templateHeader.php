<?php
	if (isset($pageName) && isset($currentPath)) {
?>

<header>
	<h1 id="title">Harrison Oest's Website</h1>
</header>
<nav>
	<div class="navbar">

			<?php if($pageName == "index") { ?>
				<a class="active" href="index.php">Home</a>
			<?php } else { ?>
				<a href="../index.php">Home</a>
			<?php } ?>

			<?php if($pageName == "aboutme") { ?>
				<a class="active" href="aboutme/aboutme.php">About Me</a>
			<?php } else { ?>
				<a href="../aboutme/aboutme.php">About Me</a>
			<?php } ?>

			<?php if($pageName == "quiz") { ?>
				<a class="active" href="jquery/quiz.php">jQuery Quiz</a>
			<?php } else { ?>
				<a href="../jquery/quiz.php">jQuery Quiz</a>
			<?php } ?>
			
			<div class='dropdown'>
				<button class='dropdown_button'>Javascript Tutorials
					<i class="fa fa-caret-down"></i>
				</button>
				<div class='dropdown_content'>
					<?php if($pageName == "jskeyboard") { ?>
						<a class="active" href="javascript/jskeyboard.php">Keyboard Driver</a>
					<?php } else { ?>
						<a href="../javascript/jskeyboard.php">Keyboard Driver</a>
					<?php } ?>

					<?php if($pageName == "jsmouse") { ?>
						<a class="active" href="javascript/jsmouse.php">Smiley Mouse</a>
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
				<?php if($pageName == "form") { ?>
					<a class="active" href='../php/form.php'>Form</a>
				<?php } else { ?>
					<a href='../php/form.php'>Form</a>
				<?php } ?>
				<?php if($pageName == "io") { ?>
					<a class="active" href='../php/io.php'>File I/O</a>
				<?php } else { ?>
					<a href='../php/io.php'>File I/O</a>
				<?php } ?>
				<?php if($pageName == "vieworders") { ?>
					<a class="active" href='../php/vieworders.php'>View Orders</a>
				<?php } else { ?>
					<a href='../php/vieworders.php'>View Orders</a>
				<?php } ?>
			</div>
		</div>
	</div>
</nav>