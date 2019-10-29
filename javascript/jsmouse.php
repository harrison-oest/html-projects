<!doctype php>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Harrison Oest" />
	<meta name="description" content="This page is all about my life." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All About Harrison Oest</title>
<link rel="stylesheet" type="text/css" href="../csci445.css"/>
</head>

<?php $pageName = "jsmouse"; ?>
<?php $currentPath = "javascript/"; ?>

<body style="background-color: #a8d1f7">
	<?php include "../templateHeader.php"; ?>
	<div align="center">
		<canvas id="canvas" width="400" height="400" style="border:1px solid #000000;">Your browser does not support the HTML5 canvas tag.</canvas>
		<script type="text/javascript" src="jsmouse.js"></script>
		<br>
		<button id="button" type="button" onclick="btnPress()">Make Me Sad</button>
	</div>
<?php include "../templateFooter.php"; ?>
</body>
</html>