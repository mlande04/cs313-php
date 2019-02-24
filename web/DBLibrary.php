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

<body background="library.jpg">
	<div>
		<h1>DB Library</h1>
		<div class="row">
		<div class="col" style="background-color: #C9E5F2;">
		<p style="font-weight: bold;">Select a genre to view books from that genre available in the library.</p>
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
			<br>
			<input type="submit" value="View Books"/>
		</form>
	<div>
		<p style="font-weight: bold;">Add a book to the library:</p>
		<form method="POST" action="addBook.php">
			<span>Title: <input type="text" name="title"></span>
			<span>Author: <input type="text" name="author"></span>
			<span>Publication Date: <input type="text" name="date"></span>
			<span>Genre: <input type="text" name="type"></span>
			<br>
			<input type="submit" value="Add Book">
		</form>
	</div>
	<div>
		<p style="font-weight: bold;">Add a Genre to the Library:</p>
		<form method="POST" action="addGenre.php">
			<span>Genre: <input type="text" name="genre"></span>
			<br>
			<input type="submit" value="Add Genre">
		</form>
	</div>
	</div>
	<div class="col" style="background-color: #DAE9EF;">
		<p style="font-weight: bold;"><br/>View every book in the library.<br/></p>
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