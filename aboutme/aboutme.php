<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" />
	<meta name="description" content="This page is all about my life." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All About Harrison Oest</title>
	<link rel="stylesheet" type="text/css" href="../csci445.css"/>
	<link rel="stylesheet" type="text/css" href="aboutme.css"/>
</head>

<?php $pageName = "aboutme"; ?>
<?php $currentPath = "aboutme/"; ?>

<body style="background-color: #a8d1f7">
	<?php include "../templateHeader.php";?>
	<h3>Contact Info</h3>
<hr>
		<h4>
		Email me at: <a id="email" href="mailto:harrisonoest@mymail.mines.edu">harrisonoest@mymail.mines.edu</a>.<br>
		Connect with me on LinkedIn: <a id="linkedin" href=https://www.linkedin.com/in/harrisonoest>LinkedIn</a>
		</h4>
<hr>
	<h3>Jump to my <a href="#hobbies">Hobbies</a>!</h3>

<h1 class="about">About Me</h1>
	<p>I was born and raised in <abbr title="Kansas City, Missouri">KCMO</abbr>. I have two siblings, an older brother and a younger sister. The picture below shows my family (minus my brother) at the best barbecue joint in Kansas City; Joe's KC Bar-B-Que. At the Colorado School of Mines, I am studying Computer Science with a focus in Business. My graduation date is May 2020. My eventual goal for my career is to create a product that I can market and make a business out of. As Kanye West said, <q>Who the real owner if your boss makes a salary?</q></p>

	<table id="family">
		<caption>The Oest Family</caption>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Relation</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Derek</td>
				<td>Alan</td>
				<td rowspan="5">Oest</td>
				<td>52</td>
				<td>Father</td>
			</tr>
			<tr>
				<td>Marcea</td>
				<td>Lynn</td>
				<td>52</td>
				<td>Mother</td>
			</tr>
			<tr>
				<td>Christopher</td>
				<td>Rex</td>
				<td>24</td>
				<td>Oldest Child</td>
			</tr>
			<tr>
				<td>Harrison</td>
				<td>Allen Randall</td>
				<td>21</td>
				<td>Middle Child</td>
			</tr>
			<tr>
				<td>Grace</td>
				<td>Emily</td>
				<td>19</td>
				<td>Youngest Child</td>
			</tr>
		</tbody>
	</table>

	<br>

	<img src="../images/OestFamily.jpeg" alt="Oest Family" style="width:300px;height:400px;">
<hr>
	<h2 class="kc_bbq">Best KC BBQ Places</h2>
	<table id="bbq">
		<caption>KC BBQ</caption>
		<thead>
			 <tr>
			 	<th>Name</th>
			 	<th>Location</th>
			 	<th>Cost</th>
			 	<th>Ranking</th>
			 </tr>
		 </thead>
		 <tbody>
		 	<tr>
		 		<td>Joe's KC</td>
		 		<td>Kansas City, KS</td>
		 		<td>$$</td>
		 		<td>1</td>
			</tr>
			<tr>
				<td>Q39</td>
				<td rowspan="3">Kansas City, MO</td>
				<td>$$$</td>
				<td>2</td>
			</tr>
			<tr>
				<td>Arthur Bryant's</td>
				<td>$$</td>
				<td>3</td>
			</tr>
			<tr>
				<td>Jack Stack BBQ</td>
				<td>$$$</td>
				<td>4</td>
			</tr>
			<tr>
				<td>Jone's BBQ</td>
				<td>Kansas City, KS</td>
				<td>$</td>
				<td>5</td>
			</tr>
		 </tbody>
	</table>
<hr>
<h1><a id="hobbies"></a>Hobbies</h1>
<hr>
	<h3>3D Printing</h3>
		<p>I first got interested in 3D printing when I was a freshman in high school. There was a maker space very close to my house, and they were welcoming of someone interested in DIY projects at a young age. After learning about the hobby, I decided to order a kit to build my own. After a long day of assembly, my printer was complete. Over the next three years of highschool, I put <del>thousands</del> hundreds of hours of printing on my printer. Some of my prints included: customized phone cases, small figurines, and custom parts for my school's robotics team. Since the cost of the material is so cheap, it cost me anywhere from 10&#162; to 80&#162; for each piece since they weren't very big.</p>
<hr>
	<h3>Mechanical Keyboards</h3>
	<!-- I wrote so much for this section, but it's because I'm passionate about this hobby -->
		<div class='keyboard_para'>
			<p>When I was doing research before building my first gaming PC, I came across a plethora of comments from other builders praising mechanical keyboards over the generic keyboards that are often bundled with computers. I was interested, but after the seeing the price tag, my interest soon faded. I found a beginner keyboard at a pawn shop a few months later for an absolute steal. This was the start of my love for this hobby. Since then, I've bought and sold 10+ keyboards in varying sizes. What is so unique about mechanical keyboards is the high level of customization. You can pick keyboards that range in size from full to 40% of a normal board. In addition, the keycaps themselves can be switched out to match a certain colorway and there are a variety of mechanical switches to choose from.</p>
		</div>

		<table id="keyboards">
			<caption>My Keyboard Collection</caption>
			<thead>
				<tr>
					<th>Board Name</th>
					<th>Size</th>
					<th>Switch Type</th>
					<th>Keycaps</th>
					<th>Cost</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tada68</td>
					<td>65%</td>
					<td>Lubed Gateron Yellow</td>
					<td>SA Pulse</td>
					<td>$140</td>
				</tr>
				<tr>
					<td>5% Purp</td>
					<td>60%</td>
					<td>Kailh Speed Bronze</td>
					<td>Stock Pok3r keycaps</td>
					<td>$200</td>
				</tr>
				<tr>
					<td>Pok3r</td>
					<td>60%</td>
					<td>Cherry MX Brown</td>
					<td>Tai-Hao Miami</td>
					<td>$90</td>
				</tr>
				<tr>
					<td>Modified HHKB Pro 2</td>
					<td>60%</td>
					<td>48g Topre Domes</td>
					<td>None</td>
					<td>$350</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>Total Cost:</td>
					<td colspan="4">$780</td>
				</tr>
			</tfoot>
		</table>
<hr>
		<h4>ErgoDox</h4>
		<p>The picture below shows a mechanical keyboard of someone I met at a keyboard meetup. This keyboard is unique because it splits up the keys into two different boards that can be operated with each hand. This style of board allows for a more ergonomic experience than a conventional keyboard, to mitgate problems such as carpal tunnel.</p>
		
		<br>

		<img src="../images/ErgoDox.jpeg" alt="ErgoDox Keyboard" style="width:800px;height:400px;">
<hr>
		<h4>Tada68</h4>
		<p>This is a board that I built myself. I take it to work every day at my internship. This is called a 65% board, since it has 60% of the keys of a normal board, plus another 5% that includes the arrow keys and a few other keys. It has Gateron Yellow switches. I took each switch apart and put a special lubricant in to make the switches slide smoothly. The keycaps themselves are a set called SA Pulse. I also have a custom USB cable that I had someone make for me; it matches the keycap set.</p>

		<br>

		<img src="../images/Tada68.jpg" alt="Tada68 Keyboard" style="width:800px;height:400px">

<h1 id="skills">Skills</h1>
	<p>Some of the career-pertinent skills I've acquired over the years are listed below:</p>
<hr>
	<h3>Programming Languages</h3>
		<ul>
			<li>Python</li>
			<li>Java</li>
			<li>C++</li>
		</ul>
<hr>
		<h4>I Love Python!</h4>
			<p>Python is my favorite programming language, and the following quote explains the exact reason why: 
			<br><br>
			<q>The joy of coding Python should be in seeing short, concise, readable classes that express a lot of action in a small amount of clear code -- not in reams of trivial code that bores the reader to death.

			- Guido van Rossum</q>
			<br><br>
			My favorite library in Python is the regular expression library. I think that the amount of text processing that can be done on one line is absolutely beautiful. I've attached a code snippet below that shows the simplicity of regular expressions. This snippet will look for and return any word that starts with and uppercase "S".</p>

			<code>str = "The rain in Spain" <br>
			x = re.search(r"\bS\w+", str) <br>
			print(x.group())</code>
	<?php include "../templateFooter.php"; ?>
</body>
</html>