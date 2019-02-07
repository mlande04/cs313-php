<?php

/**********************************************************
* File: viewScriptures.php
* Author: Br. Burton
* 
* Description: This file shows an example of how to query a
*   PostgreSQL database from PHP.
***********************************************************/

require "dbConnect.php";
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>Scripture List</title>
</head>

<body>

	<div>
		<h1>Scripture Resources</h1>
<?php

		// The query is executed
		// right here and the data echoed out as we iterate the query.

		// First, prepare the statement
		$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
		$statement->execute();

		// Go through each result
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			// The variable "row" now holds the complete record for that
			// row, and we can access the different values based on their
			// name
			echo '<p>';
			echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
			echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
			echo '</p>';
		}

?>

	</div>

</body>

</html>