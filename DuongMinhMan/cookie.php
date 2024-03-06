<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cookie_name = "user";
        $cookie_value = "Dương Minh Mẫn";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
       if(isset($_COOKIE[$cookie_name])){
        echo "Welcome" . $_COOKIE[$cookie_name] . "<br/>";
        }
        else {
            echo "Hello Stanger. <br/>";
        }
    ?>
</body>
</html>