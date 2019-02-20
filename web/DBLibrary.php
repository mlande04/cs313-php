<?php

/**************************************
* File: BDLibrary
* Purpose: View items in the db library
***************************************/

require ("connection.php");
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>DBLibrary | Home</title>
	<link rel="stylesheet" type="text/css" href="DBLibrary.css">
</head>

<body>

	<div>
		<h1>DB Library</h1>
		<div class="row">
		<div class="col" style="background-color: #C9E5F2;">
		<p>Select a genre to view books from that genre available in the library.</p>
		<form method="POST" action="getBooksGenre.php">
			<select name="genreList">
<?php
		// prepare statement
		$statement = $db->prepare("Select * FROM genre");
		$statement->execute();
		
		// Go through results
				while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
					echo '<option value="' . $row['id'] . '">' . $row['genre_id'] . '</option>';
				}
?>
			</select>
			<input type="submit" value="View Books"/>
		</form>
	<div>
		<p>Add a book to the library:</p>
		<form method="POST" action="">
			<span>Title: <input type="text" name="title"></span>
			<span>Author: <input type="text" name="author"></span>
			<span>Publication Date: <input type="text" name="date"></span>
			<br>
			<input type="submit" value="Add Book">
		</form>
	</div>
	<div>
		<p>Add a Genre to the Library:</p>
		<form method="POST" action="">
			<span>Genre: <input type="text" name="title"></span>
			<br>
			<input type="submit" value="Add Book">
		</form>
	</div>
	</div>
	<div class="col" style="background-color: #DAE9EF;">
		<p><br/>View every book in the library.<br/></p>
<?php

		// First, prepare the statement
		$statement = $db->prepare("SELECT * FROM library");
		$statement->execute();

		// Go through each result
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			echo '<p>';
			echo $row['title'] . ' ' . $row['author'];
			echo '</p>';
		}
?>
	</div>
	</div>
	</div>

</body>

</html>