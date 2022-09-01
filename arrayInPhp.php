<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In Php</title>
</head>
<body>
    <h1>Array In Php</h1>
    <?php
        $student = array(
            0 => 'Sinh viên A',
            1 => 'Sinh viên B',
            2 => 'Sinh viên C',
        );
        // Sử dụng vòng lặp foreach để truy xuất dữ liệu của mảng
        foreach ($student as $item) {
            echo $item."<br>"; // In từng phần tử của mảng sau đó xuống dòng <br>
        }
    ?>
</body>
</html>