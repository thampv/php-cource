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

    <title>Embed Array In Html</title>
</head>

<body>

    <div class="container">
        <h1>Embed Array In Html - Nhúng mảng vào html</h1>
        <div class="row">
            <div class="col-md-6">
                <?php
                    # 1. Khởi tạo mảng một chiều 11 phần tử
                    $n = 10;
                    $list_user = array();
                    for ($i = 0; $i <= $n; $i++) {
                        $list_user[$i] = "Người dùng thứ: " . $i;
                    }
                ?>
                <h3>Danh sách người dùng</h3>
                <table class="table table-bordered table-hover">
                    <caption>Đây là caption</caption>
                    <thead>
                        <tr>
                            <td class="font-weight-bold">Id</td>
                            <td class="font-weight-bold">Tên người dùng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($list_user as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $key ?></td>
                            <td><?php echo $value ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php
                    # 3. Khởi tạo mảng đa chiều 10 phần tử
                    
                    $num_element = 500;
                    $multi_list_user = array();
                    for ($i = 0; $i <= $num_element; $i++) {
                        $multi_list_user[$i]['id'] = $i;
                        $multi_list_user[$i]['fullname'] = "Người dùng thứ " . $i;
                        $multi_list_user[$i]['email'] = "phancuong.qt" . $i . "@gmail.com";
                    }
                ?>
                <h3>Danh sách người dùng</h3>
                <table class="table table-bordered table-hover">
                    <caption>Đây là caption</caption>
                    <thead>
                        <tr>
                            <td class="font-weight-bold">Id</td>
                            <td class="font-weight-bold">Full Name</td>
                            <td class="font-weight-bold">Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($multi_list_user as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['fullname'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
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