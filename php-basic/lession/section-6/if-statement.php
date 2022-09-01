<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="js/jquery-3.6.0.min.js"></script>

    <title>If Statement In PHP</title>
</head>

<body>
    
    <div class="container">
        <h1>If statement in php</h1>
        <div class="row">
            <div class="col-md-12">
                <?php
                    //==============================================================================
                    //Cấu trúc điều kiện if
                    //==============================================================================
                    
                    # 1. Cấu trúc điều kiện if
                    // Kiểm tra số chẵn
                    // $a = 10;
                    // if ($a % 2 == 0) {
                    //     echo "{$a} là số chẵn";
                    // }

                    # 2. Cấu trúc điều kiện if else
                    // Kiểm tra số chẵn - lẻ
                    // $a = 10;
                    // if ( $a % 2 == 0) {
                    //     echo $a . ": là số chẵn";
                    // } else {
                    //     echo "$a: là số lẻ";
                    // }

                    # 3. Cấu trúc điều kiện if ... elseif ... elseif ... (elseif cùng cấp)
                    // Xếp loại học sinh dựa vào điểm trung bình
                    $average_point = 8.4;
                    if ($average_point < 4)
                        echo "Xếp loại của bạn là: Học sinh yếu";
                        elseif ($average_point == 4 || $average_point < 5.5) {
                            echo "Xếp loại của bạn là: Học sinh trung bình";
                        }
                        elseif ($average_point == 5.5 || $average_point < 7) {
                            echo "Xếp loại của bạn là: Học sinh trung bình khá";
                        }
                        elseif ($average_point == 7 || $average_point < 8.5) {
                            echo "Xếp loại của bạn là: Học sinh khá";
                        }
                        elseif ($average_point >= 8.5) {
                            echo "Xếp loại của bạn là: Học sinh giỏi";
                        }

                ?>

            </div>
        </div>
    </div>




    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

</body>

</html>