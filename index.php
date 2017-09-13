<!DOCTYPE html>

<html>
	<head>
		<title>Gabriel Sanna</title>

		<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<?php include 'functions.php';?>
		
		<div id="wrapper">

			<h1>Gabriel Sanna</h1>

			<img src='images/gsanna.jpg' alt='Gabriel Sanna profile photo' id="photo">

			<h2>About Me</h2>
			<p>I'm a systems administrator at a software company outside of Boston, and a student here at the Extension School! I've lived here in Boston for three years, and love it. In my spare time, I try to learn and read, rock climb, see movies, and hang out with my girlfriend's dog.</p>

			<h2>Random Quote</h2>
			<blockquote>
				<?php echo $random_quote ?>
			</blockquote>
		</div>
	</body>
</html>