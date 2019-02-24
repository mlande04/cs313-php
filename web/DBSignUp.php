<?php

/**************************************
* File: BDLibrary Sign Up
* Purpose: Sign up to create a Library DB
***************************************/

require ("connection.php");
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>DBLibrary | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="DBLibrary.css">
</head>

<body background="library.jpg">
	<h1>DB Library Sign Up</h1>
	
<?php

    if (isset($_POST['username'])) {
        //check to see if username is taken
        $username = $_POST['username'];

        $statement = $db->prepare('SELECT 1 AS one FROM users WHERE username = :username LIMIT 1;');
        $statement->execute([':username' => $username]);
        $user_exists = $statement->fetch(PDO::FETCH_ASSOC)['one'];

        if(isset($_POST["password"])) {
            //check if password is a valid password
            $hashedpassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

            //Insert into database

            $stmt = $db->prepare(
              'INSERT INTO users(username, encrypted_password)
              VALUES(:username, :hashedpassword);'
            );
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->bindValue(':hashedpassword', $hashedpassword, PDO::PARAM_STR);
            $stmt->execute();

            $newURL = 'sign-in.php';
            header('Location: ' . $newURL);
            die();
        }
    }
?>


<form method="post" action="sign-up.php">
    <?php if ($user_exists): ?>
      Sorry, this username was already taken.
    <?php endif; ?>
    <label>Create Username:</label>
    <input type="text" name="username" required>

    <label>Create Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Create User</button>
</form>
</body>

</html>