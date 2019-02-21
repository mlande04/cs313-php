<?php

/**************************************
* File: addBook.php
* Purpose: View items in the db library
* 	by a selected genre.
***************************************/

require ("connection.php");
$db = get_db();

?>

<?php
	// get book info from user
	$title = $_POST['title'];
	$author = $_POST['author'];
	$date = $_POST['date'];
	$genre = $_POST['type'];
	
	// prepare statement
	$statement = $db->prepare("INSERT INTO $type VALUES ('$title', '$author', 'date');");
	$statement->execute();
	
	// reload main page
	header('Location: DBLibrary.php');
    die();
?>