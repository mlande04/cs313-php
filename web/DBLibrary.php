<?php

/**************************************
* File: BDLibrary
* Purpose: View items in the db library
***************************************/

require "connection.php";
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>DBLibrary</title>
</head>

<body>

	<div>
		<h1>DB Library</h1>
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

</body>

</html>