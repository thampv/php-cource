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

    <title>Multidimentional Array In PHP</title>
</head>

<body>

    <div class="container">
        <h1>Multidimentional Array In Php - Mảng đa chiều trong Php</h1>
        <div class="row">
            <div class="col-md-12">

                <?php
                    $list_user = array(
                        1 => array(
                            'id' => 1,
                            'fullname' => 'Phan Văn Cương 1',
                            'email' => 'phancuong.qt1@gmail.com',
                            'date-note' => array('Nội dung ghi chú 1', 'Nội dung ghi chú 2', 'nội dung ghi chú 3')
                        ),
                        2 => array(
                            'id' =>2,
                            'fullname' => 'Phan Văn Cương 2',
                            'email' => 'phancuong.qt2@gmail.com',
                            'date-note-2' => array(
                                1 => array('Nội dung 1', 'Nội dung 2', 'Nội dung 3'),
                                2 => array('Nội dung 1', 'Nội dung 2', 'Nội dung 3'),
                                3 => array('Nội dung 1', 'Nội dung 2', 'Nội dung 3')
                            )
                        ),
                        3 => array(
                            'id' => 3,
                            'fullname' => 'Phan Văn Cương 3',
                            'email' => 'phancuong.qt3@gmail.com'
                        ),
                        4 => array(
                            'id' => 4,
                            'fullname' => 'Phan Văn Cương 4',
                            'email' => 'phancuong.qt4@gmail.com'
                        ),
                    );

                    echo "Giá trị của mảng đa chiều list_user là: <br>";
                    echo "<pre>";
                    print_r($list_user);
                    echo "</pre>";

                    echo "Thêm phần từ vào mảng đa chiều list_user <br>";
                    $list_user[5] = array(
                        'id' => 5,
                        'fullname' => 'Phan Văn Cuong 5',
                        'email' => 'phancuong.qt4@gmail.com'
                    );

                    $list_user[1]['fullname'] = 'Phạm Ngọc ẩn';
                    $list_user[1]['date-note'][1] = 'Cập nhật lại date note 1';
                    $list_user[2]['date-note-2'][2][1] = 'Nội dung 99999999999999';

                    echo "Giá trị của mảng đa chiều list_user sau khi thêm phần tử số 5 là: <br>";
                    echo "<pre>";
                    print_r($list_user);
                    echo "</pre>";

                    echo "<br>";
                    echo $list_user[2]['date-note-2'][2][1];
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