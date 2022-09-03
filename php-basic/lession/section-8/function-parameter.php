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

    <title>Function Parameter In Php</title>
</head>

<body>

    <div class="container">
        <h1>Function Parameter In Php</h1>
        <div class="row">
            <div class="col-md-12">

            <?php
                function sum_multi_number(){
                    $sum = 0;
                    $list_parameter = func_get_args();
                    foreach($list_parameter as $value) {
                        $sum += $value;
                    }
                    show_array($list_parameter);
                    echo "<br>" . $sum;
                }

                sum_multi_number (1, 3, 7, 9, 2, 8, 6, 4);

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

        # 1. show_array function

        function show_array($print_array){
            if(is_array($print_array)){
                echo "<pre>";
                print_r($print_array);
                echo "</pre>";
            }
        }

    ?>

</body>

</html>