<?php

/**************************************
* File: addGenre.php
* Purpose: View items in the db library
* 	by a selected genre.
***************************************/

require ("connection.php");
$db = get_db();

?>

<?php
	// get genre from user
	$genre = $_POST['genre'];

	//prepare statement
	$statement = $db->prepare("INSERT INTO genre VALUES ('$genre');");
	$statement->execute();
	
	// reload main page
	header('Location: DBLibrary.php');
    die();
?>