<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <a href="form.html">Back to Form</a>
<?php
    $name = "";
    $email = "";
    if(isset($_POST['name']))
        $name = $_POST['name'];
    if(isset($_POST['email']))
        $email = $_POST['email'];
    echo "<br/>Name: " . $name . " - Email: " . $email;
    
    //save to file
    $output = $name . "#" . $email . "\n";
    $file = fopen("formdata.txt", "a");
    fwrite($file, $output);
    fclose($file);
    echo "data written to file!";
    ?>
</body>
</html>