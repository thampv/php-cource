<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Variable</title>
</head>
<body>
    <h1>System Variable</h1>
    <?php
        //Thông tin về Server
        echo "Thông tin về Server";
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";

        echo "<br><br>";
        echo "Thông tin về Cookie";
        //Thông tin về Cookie
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

    ?>
</body>
</html>