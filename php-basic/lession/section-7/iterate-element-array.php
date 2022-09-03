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

    <title>Iterate Element Array By Foreach</title>
</head>

<body>

    <div class="container">
        <h1>Iterate Element Array By Foreach - Duyệt phần tử mảng bằng foreach</h1>
        <div class="row">
            <div class="col-md-12">

                <?php

                    //===================================================
                    // Duyệt phần tử mảng bằng foreach
                    //===================================================

                    # 1. Khởi tạo mảng một chiều 11 phần tử

                    // $n = 10;
                    // $list_user = array();
                    // for ($i = 0; $i <= $n; $i++) {
                    //     $list_user[$i] = "Người dùng thứ: " . $i;
                    // }

                    // echo "<pre>";
                    // print_r($list_user);
                    // echo "</pre>";

                    // # 2. Duyệt từng phần tử mảng một chiều bằng foreach

                    // foreach($list_user as $key=>$value) {
                    //     echo $key . " => " . $value . "<br>";
                    // }

                    # 3. Khởi tạo mảng đa chiều 5 phần tử
                    
                    $num_element = 5;
                    $multi_list_user = array();
                    for ($i = 0; $i <= $num_element; $i++) {
                        $multi_list_user[$i]['id'] = $i;
                        $multi_list_user[$i]['fullname'] = "Người dùng thứ " . $i;
                        $multi_list_user[$i]['email'] = "phancuong.qt" . $i . "@gmail.com";
                    }

                    // echo "<pre>";
                    // print_r($multi_list_user);
                    // echo "</pre>";

                    # 4. Duyệt từng phần tử mảng đa chiều bằng foreach

                    foreach($multi_list_user as $key => $item) {
                        echo "<br> Info user: " . $key . " của list là: <br>";
                        echo $item['id'] . "<br>";
                        echo $item['fullname'] . "<br>";
                        echo $item['email'] . "<br>";
                    }

                    # 5. Duyệt từng phần tử mảng đa chiều bằng foreach lồng với foreach

                    // foreach($multi_list_user as $item1) {
                    //     foreach($item1 as $item2){
                    //         echo "$item2 <br>";
                    //     }
                    // }

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