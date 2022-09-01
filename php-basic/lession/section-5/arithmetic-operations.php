<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arimetic Operations</title>
</head>
<body>
    <h1>Arimetic Operations</h1>
    <?php
    $a = 10;
    $b = 5;
    $sum = $a + $b;
    echo "Tổng của $a và $b = ". $a + $b;
    echo "<br>";
    echo "Hiệu của $a và $b = ". $a - $b;
    echo "<br>";
    echo "Tích của $a và $b = ". $a * $b;
    echo "<br>";
    echo "Thương của $a và $b = ". $a / $b;
    echo "<br>";
    echo "Chia lấy phần dư của $a và $b = ". $a % $b;
    echo "<br>";
    echo "$a mũ $b = ". pow($a,$b);
    echo "<br>";
    echo "Tổng của {$a} + {$b} = {$sum}";
    ?>
</body>
</html>