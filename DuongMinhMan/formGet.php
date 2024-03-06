<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <a href="form.html">Back to Form</a>
<?php
    if(isset($_GET['name']))
        $name = $_GET['name'];
    if(isset($_GET['email']))
        $email = $_GET['email'];
    echo "<br/>Name: " . $name . " - Email: " . $email;
    ?>
</body>
</html>