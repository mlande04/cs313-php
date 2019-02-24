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
	
	// form query 
	$query = "INSERT INTO " . $genre . " VALUES (:title, :author, :date)";
	
	// bind values
	$statement->bindValue(':title', $title);
	$statement->bindValue(':author', $author);
	$statement->bindValue(':date', $date);
	
	// prepare statement
	$statement = $db->prepare($query);
	$statement->execute();
	
	// reload main page
	header('Location: DBLibrary.php');
    die();
?>