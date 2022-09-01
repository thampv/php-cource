<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function In Php</title>
</head>

<body>
    <h1>Function In Php</h1>
    <?php
        /* Xây dựng một hàm "Tính tổng các số lẻ trong phạm vi n"
        Nhập vào một số n bất kỳ,
        xuất ra kết quả tổng các số lẻ trong
        phạm vi n
        */
        function totalOdd($n) {
            $sum = 0;
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 != 0) {
                    $sum = $sum + $i;
                }
            }
            return $sum;
        }
        $x = 1000;
        echo "Tổng của các số lẻ trong phạm vi x = 1000 là:  ".totalOdd($x);
    ?>
</body>

</html>