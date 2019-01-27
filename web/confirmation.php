<?php

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8" />
    <title>Confirmation Page</title>
    <meta name="view" content="width=device-width, initial-scale=1.0">
</head>

<body>
<header>
    <h3>Confirmation Page</h3>
</header>

    <?php
        if(isset($_POST['submit']) 
        {
            echo("Name: " . $_POST['name1'] . " " . $_POST['name2'] . "<br />\n");
            echo("Street Address: " . $_POST['stAddress'] . "<br />\n");
            echo("City, State Zip Code: " . $_POST['city'] . " " . $_POST['state'] . " " . $_POST['zip'] . "<br />\n");
        }
    ?>
<?php
    $confirm=$_POST[];
    $cancel=$_POST[];

    if (isset($confirm))
        echo "<p>Your purchase has been completed.<br /></p>";

    if (isset($cancel))
        echo "<p>Your purchase has been canceled.<br /></p>";

?>
</body>
</html>
?>