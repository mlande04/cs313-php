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
    // make query
    $query = "INSERT INTO genre (genre_id) VALUES (:genre_id)";
        
	// get genre from user
	$genre = $_POST["genre"];
    $statement->bindValue(':genre_id', $genre);

	//prepare statement
	$statement = $db->prepare($query);
	$statement->execute();
	
	// reload main page
	header('Location: DBLibrary.php');
    die();
?>