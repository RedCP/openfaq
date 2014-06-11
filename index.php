<?php

include('src/includes/config.php');
include('src/includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><? echo $title; ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Thomas, th0m.as"> <!-- Do NOT remove this! -->
	<meta charset="utf-8">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"> <!-- Main stylesheet -->
	<link href="assets/css/reset.css" rel="stylesheet" type="text/css"> <!-- Resets browser's default margins and paddings -->
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,200,700' rel='stylesheet' type='text/css'>
	<link href="assets/img/openfaq.png" type="image/png" rel="icon"> <!-- Tab icon -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script> <!-- Load jQuery for fun! -->
</head>
<body>
	<div class="sect1Cont">
		<div class="banner">
			<h1 class="logo"><? echo $title; ?></h1>
			<p class="slogan">Ask a question, get an answer!</p>
		</div>
	</div>
	<div class="sect2Cont">
		<div class="main">
			<div class="content">
				<form method="post" action="index.php">
					<textarea class="ask" name="question" placeholder="What would you like to ask today?"></textarea>
					<div class="tools">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="sect3Cont">
		<div class="menu">
			<button class="blue" href="login">Sign In</button>
			<button class="green" href="register">Sign Up</button>
			<button class="red" href="team">The Team</button>
			<button class="orange" href="report">Report</button>
			<button class="yellow" href="/">Return</button>
		</div>
	</div>
</body>
</html>