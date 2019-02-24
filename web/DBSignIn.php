<?php

/**************************************
* File: BDLibrary Sign In
* Purpose: Sign in to your library db
***************************************/

require ("connection.php");
$db = get_db();

?>

<!DOCTYPE html>

<html>

<head>
	<title>DBLibrary | Sign In</title>
	<link rel="stylesheet" type="text/css" href="DBLibrary.css">
</head>

<body background="library.jpg">
	<h1>DB Library Sign In</h1>
	
<?php
require 'connection.php';

if (isset($_POST['username'])) {
  $statement = $db->prepare('SELECT * FROM users WHERE username = :username LIMIT 1;');
  $statement->execute(array(':username' => $_POST['username']));
  $user = $statement->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($_POST['password'], $user['encrypted_password'])) {
    // success!
    session_start();
    $_SESSION['user_id'] = $user['id'];
    header('Location: DBLibrary.php');
    die();
  } else {
    // invalid user/password
  }
}
?>

<form method="post" action="sign-in.php">
  <div>
    <!-- If we made it this far, then the username or password should be invalid -->
    <?php if (isset($_POST['username'])): ?>
      Invalid username or password.
    <?php endif; ?>
  </div>
  <div>
    <label>
      Username:
      <input type="text" name="username" required>
    </label>
    <label>
      Password:
      <input type="password" name="password" required>
    </label>
  </div>
  <div>
    <input type="submit" value="Sign In">
  </div>
</form>
<a href="sign-up.php">Sign Up</a>

	
</body>

</html>