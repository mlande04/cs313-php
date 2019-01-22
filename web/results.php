<?php
// use POST to get variables input

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$country = $_POST["country"];
$comments = htmlspecialchars($_POST["comments"]);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Submission of Form</title>
	</head>
	<body>
		<h1>Results</h1>
		<p>Your name: <?=$name ?></p>
		<p>     email: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
		<p>	    major: <?=$major ?></p>
		<p>Countries visited: </p>
		<ul>
		<?
			foreach ($countries as $country)
			{
				$country_add = htmlspecialchars($country);
				echo "<li><p>$country_add</p></li>";
			}
		?>		
		</ul>
		<p>Comments: <?=$comments?></p>
	</body>
</html>