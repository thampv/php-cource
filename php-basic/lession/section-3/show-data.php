<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embed PHP In Html</title>
</head>
<body>
    <?php
    // Xuất dữ liệu trong php cách 01
    $a = 100;
    echo 'Giá trị của biến a là: '.$a;
    echo '<br>';
    // Xuất dữ liệu trong php cách 02
    echo "Giá trị của biến a là: $a";
    echo '<br>';
    // Xuất dữ liệu trong php cách 03
    echo "Giá trị của biến a là: {$a}";
    echo '<br>';
    ?>

    <?php
        $my_array = array('A', 'B', 'C');
        echo '<pre>';
        print_r($my_array);
        echo '</pre>';
    ?>

    <h1>Embed Php in html</h1>
    <p>Xin chào, Tôi là: <?php echo('Phan Văn Cương') ?></p>
    
</body>
</html>