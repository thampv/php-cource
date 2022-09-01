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

    <title>Created Array</title>
</head>

<body>

    <div class="container">
        <h1>Created Array</h1>
        <div class="row">
            <div class="col-md-12">
            
            <?php
            
            //===================================================
            // Mảng trong Php
            //===================================================

            # 1. Tạo mảng rỗng

            $error = array();
            
            # 2. Tạo mảng với key mặc định
            $list_odd = array(1, 3, 5);

            echo "<pre>";
            print_r($list_odd);
            echo "</pre>";

            # 3. Tạo mảng với key xác định

            $list_user = array (
                'id' => '1',
                'fullname' => 'Pham Van Tham',
                'email' => 'thampv@gmail.com'
            );
            
            echo "<br>";
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