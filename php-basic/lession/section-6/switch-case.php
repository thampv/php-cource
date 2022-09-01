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

    <title>Switch Case In PHP</title>
</head>

<body>
    
    <div class="container">
        <h1>Cấu trúc switch case trong php</h1>
        <div class="row">
            <div class="col-md-12">

            <?php

            //=================================================================
            // Cấu trúc switch case trong php
            //=================================================================

            # Hiển thị ngày trong tuần
            $day = 5;
            switch ($day) {
                case 2:
                    echo "Hôm nay là thứ Hai";
                    break;
                case 3:
                    echo "Hôm nay là thứ Ba";
                    break;
                case 4:
                    echo "Hôm nay là thứ Tư";
                    break;
                case 5:
                    echo "Hôm nay là thứ Năm";
                    break;
                case 6:
                    echo "Hôm nay là thứ Sáu";
                    break;
                case 7:
                    echo "Hôm nay là thứ Bảy";
                    break;
                default:
                    echo "Hôm nay là Chủ nhật";
                    break;
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