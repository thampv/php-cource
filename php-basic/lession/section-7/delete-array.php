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

    <title>Delete Array By Function Unset() In Php</title>
</head>

<body>

    <div class="container">
        <h1>Delete Array By Function Unset - Xóa mảng bằng hàm unset trong Php</h1>
        <div class="row">
            <div class="col-md-12">

                <?php

                    $list_user = array(
                        'id' => 1,
                        'fullname' => 'Phan Văn Cương',
                        'email' => 'phancuong.qt@gmail.com'
                    );

                    echo "Giá trị của mảng list_user là: <br>";
                    echo "<pre>";
                    print_r($list_user);
                    echo "</pre>";

                    unset($list_user['email']);
                    echo "Giá trị của mảng list_user sau khi xóa bằng hàm unset() là: <br>";
                    echo "<pre>";
                    print_r($list_user);
                    echo "</pre>";

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