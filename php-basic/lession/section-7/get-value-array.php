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

    <title>Get Value Array</title>
</head>

<body>

    <div class="container">
        <h1>Get Value Array - Lấy giá trị trong một mảng</h1>
        <div class="row">
            <div class="col-md-12">

                <?php

                    //===============================================================
                    // Khởi tạo một mảng có key xác định
                    //===============================================================
                
                    $info = array(
                        'id' => 1,
                        'fullname' => 'Phan Văn Cương',
                        'email' => 'phancuong.qt@gmail.com'
                    );

                    $list_prime = array(1, 3, 4, 7, 8, 15);

                    echo "Giá trị đầu tiên của mảng list_prime là: " . $list_prime[0] . "<br>";

                    # Lấy dữ liệu fullname
                    echo ($info['fullname']);
                    $email = $info['email'];
                    echo "<br>" . $email;

                ?>

            </div>

            <div class="col-md-12">
                <p class="mb-0">Id: <strong><?php echo $info['id'] ?></strong></p>
                <p class="mb-0">Họ và tên: <strong> <?php echo $info['fullname'] ?></strong></p>
                <p class="mb-0">Email: <strong> <?php echo $info['email'] ?><strong></p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-0">Display Bootstrap</h1>
                <h3 class="mb-0">Display Cho tất cả các thiết bị</h3>
                <div class="box bg-dark p-1 text-light">
                    <p class="mb-0">Id: <strong><?php echo $info['id'] ?></strong></p>
                    <p class="mb-0">Họ và tên: <strong> <?php echo $info['fullname'] ?></strong></p>
                    <p class="mb-0">Email: <strong> <?php echo $info['email'] ?><strong></p>
                </div>
                <div class="box bg-primary p-1 text-light">Box2</div>
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