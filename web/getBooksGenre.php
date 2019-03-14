<?php

/**************************************
* File: getBooksGenre.php
* Purpose: View items in the db library
* 	by a selected genre.
***************************************/

require ("connection.php");
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>DBLibrary | Genre Search Results</title>
	<link rel="stylesheet" type="text/css" href="DBLibrary.css">
</head>

<body>
<?php
		// check if isset
		$option = isset($_POST['genreList']) ? $_POST['genreList'] : false;
		if ($option) {
			echo htmlentities($_POST['genreList'], ENT_QUOTES, "UTF-8");
		} else {
			echo "Genre is required";
			exit; 
		}
		// set variable to get genre info
		$var = $_POST['genreList'];
		// prepare statement
		$statement = $db->prepare("Select * FROM " . $var);
		$statement->execute();
		
		// display output
		<table>
			<thead>
				<tr>ID</tr>
				<tr>Title</tr>
				<tr>Author</tr>
				<tr>Date</tr>
			</thead>
			<tbody>
				while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
					echo '<tr>';
					echo '<td>' . $row['id'] . '</td>';
					echo '<td>' . $row['title'] . '</td>';
					echo '<td>' . $row['author'] . '</td>';
					echo '<td>' . $row['date'] . '</td>';
					echo '</tr>';
				}
			</tbody>
		</table>
   
?>
</body>
</html> 