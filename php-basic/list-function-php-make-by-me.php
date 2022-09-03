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

    <title>List Function Php Make By Me</title>
</head>

<body>

    <div class="container">
        <h1>List Function Make By Me</h1>
        <div class="row">
            <div class="col-md-12">

            <?php
                $list_user = array(
                    'id' => 100,
                    'fullname' => 'Phan Văn Cương',
                    'email' => 'phancuong.qt@gmail.com'
                );

                show_array($list_user);

                echo "<br>";
                echo sum_multi_number(1, 9, 6, 4, 100);

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

    <?php

        //=================================================================
        // LIST FUNCTION MAKE BY ME - DANH SÁCH HÀM TỰ PHÁT TRIỂN
        //=================================================================

        //=====================
        // Index
        //=====================

        # 1. show_array function ==> print the elements of the array to the screen - in các phần tử của mảng ra màn hình
        # 2. sum_multi_number ==> sum multiple numbers - tính tổng nhiều số

        //============================================================================================================================
        # 1. show_array function

        function show_array($print_array){
            if(is_array($print_array)){
                echo "<pre>";
                print_r($print_array);
                echo "</pre>";
            }
        }

        # 2. sum_multi_number

        function sum_multi_number(){
            $sum = 0;
            $list_parameter = func_get_args();
            foreach($list_parameter as $value) {
                $sum += $value;
            }
            return $sum;
        }

        # 3. html_head

        function html_head() {
            $content_head = "<head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        
            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'
                integrity='sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn' crossorigin='anonymous'>
        
            <!-- Separate Popper and Bootstrap JS -->
                <script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js'
                integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj'
                crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'
                integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN'
                crossorigin='anonymous'></script>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'
                integrity='sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2'
                crossorigin='anonymous'></script>
        
            <!-- Jquery -->
            <script src='js/jquery-3.6.0.min.js'></script>
        
            <title>Hello, world!</title>
        </head>";
            echo $content_head;
        }
    ?>

</body>

</html>