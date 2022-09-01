<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - PHP Basic Course</title>
</head>
<body>
    <h1>Exercise 4 - PHP Basic Course</h1>
    <?php
    $list_user = array(
        0 => array(
            'id' => 1,
            'name' => 'Nguyễn Văn An 1',
            'birth_year' => 1988,
            'weight' => '62.5kg',
            'email' => 'an1@gmail.com'
        ),
        1 => array(
            'id' => 2,
            'name' => 'Nguyễn Văn An 2',
            'birth_year' => 2003,
            'weight' => '61.5kg',
            'email' => 'an2@gmail.com'
        ),
        2 => array(
            'id' => 3,
            'name' => 'Nguyễn Văn An 3',
            'birth_year' => 1990,
            'weight'=> '60.5kg',
            'email' => 'an3@gmail.com'
        ),
    );
    echo "<h2>List User</h2><br>";
    echo "<pre>";
    print_r($list_user);
    echo "</pre>";

    $list_product = array(
        0 => array(
            'product_id' => 1,
            'product_name' => 'Iphone',
            'product_price' => '18tr'
        ),
        1 => array(
            'product_id' => 2,
            'product_name' => 'Laptop Dell',
            'product_price' => '32tr'
        ),
        2 => array(
            'product_id' => 3,
            'product_name' => 'Camera IP',
            'product_price' => '1,8tr'
        ),
    );

    echo "<br>";
    echo "<h2>List Product</h2>";
    echo "<pre>";
    print_r($list_product);
    echo "</pre>";
    ?>
    <br>
    <br>
    <p>Tôi là: <strong><?php print_r($list_user[0]['name']); ?></strong></p>
    <p>Sinh năm: <strong><?php print_r($list_user[0]['birth_year']); ?></strong></p>
    <p>Cân nặng: <strong><?php print_r($list_user[0]['weight']); ?></strong></p>
</body>
</html>