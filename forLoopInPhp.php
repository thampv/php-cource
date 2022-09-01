<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop In PHP</title>
</head>

<body>
    <h1>For Loop In PHP</h1>
    <?php
        // Tính tổng các số lẻ trong phạm vi 1000
        $n = 1000;
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $sum = $sum + $i;
            }
        }
        echo "Tổng các số lẻ trong phạm vi 1000 là: ".$sum;
    ?>
</body>

</html>