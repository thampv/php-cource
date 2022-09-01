<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type Bolean In PHP</title>
</head>

<body>
    <?php
    $a = 10;
    if ($a % 2 == 0) {
        echo "{$a} là số chẵn";
    }

    function check_even($n)
    {
        if($n % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    $check = check_even(7);
    echo "<br>";
    echo check_even(10);

    ?>
</body>

</html>