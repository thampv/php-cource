<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else statement in php</title>
</head>

<body>
    <h1>Câu lệnh if - else trong php</h1>
    <?php
        // Kiểm tra xem người dùng đã login hay chưa, nếu chưa thì nhắc người dùng login
        $isLogin = false;
        if ($isLogin == true) {
            echo "Chúc mừng bạn đã đăng nhập thành công";
        } else {
            echo "Bạn vui lòng đăng nhập tài khoản";
        }
    ?>
</body>

</html>