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

    <title>Exercise 6</title>
</head>

<body>

    <div class="container">
        <h1>Exercise 6</h1>
        <div class="row">
            <div class="col-md-12">

            <?php

            //================================================================================
            // Bài tập 6
            //================================================================================

            # 1. Tính tổng các số chẵn từ 1 đến n (n>=2)

            // $sum_even = 0;
            // $n = 10;
            // $i = 0;
            // if ($n >= 2) {
            //     for ($i = 1; $i <= $n; $i++) {
            //         if ($i % 2 == 0) {
            //             $sum_even += $i;
            //         }
            //     }
            //     echo "Tổng các số chẵn trong pham vi từ 1 đến {$n} là: ". $sum_even;
            // } else {
            //     echo "n < 2, vui lòng nhập lại số khác >= 2";
            // }


            # 2. Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n (n>=3)

            // $sum_3 = 0;
            // $n_3 = 20;
            // $i = 1;
            // if ($n_3 >= 3) {
            //     while ($i <= $n_3) {
            //         if ($i % 3 == 0) {
            //             $sum_3 += 1/$i;
            //         }
            //         $i++;
            //     }
            //     echo "Tổng nghịch đảo của các số chia hết cho 3 trong phạm vi từ 3 đến {$n_3} là: ". $sum_3;
            // } else {
            //     echo "n < 3, vui lòng nhập lại số khác >= 3";
            // }

            # 3. Tính tổng chuỗi n/(n+1) (n>=1)

            // $sum_chain = 0;
            // $n_chain = 20;
            // if ($n_chain >= 1) {
            //     for ($i = 1; $i <= $n_chain; $i++) {
            //         $sum_chain += $i/($i+1);
            //     }
            //     echo "Tổng chuỗi n/(n+1) trong phạm vi từ 1 đến {$n_chain} là: ". $sum_chain;
            // } else {
            //     echo "n < 1, vui lòng nhập lại số khác >= 1";
            // }

            # 4. Giải phương trình bậc 2
            
            $a = 3;
            $b = 2;
            $c = 5;
            $delta = ($b*$b - 4*$a*$c); 
            $x1 = 0;
            $x2 = 0;
            
            // if ($delta < 0) {
            //     echo "Phương trình {$a}x^2 + {$b}x + {$c} vô nghiệm vì có giá trị Delta = {$delta} <0";
            // } else {
            //     if ($delta == 0) {
            //         $x1 = -1*$b/(2*$a);
            //         echo "Phương trình {$a}x^2 + {$b}x + {$c} có nghiệm kép vì có giá trị Delta = {$delta} = 0, nghiệm của phương trình là: ". $x1;
            //     } else {
            //         if ($delta > 0) {
            //             $x1 = (-1*$b + sqrt($delta))/(2*$a);
            //             $x2 = (-1*$b - sqrt($delta))/(2*$a);
            //             echo "Phương trình {$a}x^2 + {$b}x + {$c} có nghiệm 2 nghiệm phân biệt vì có giá trị Delta = {$delta} >0 <br>";
            //             echo "Nghiệm x1 của phương trình là: ". $x1 . "<br>";
            //             echo "Nghiệm x2 của phương trình là: ". $x2;
            //         }
            //     }
            // }

            if ($delta < 0) {
                echo "Delta của phương trình là $delta <br>";
                echo "Phương trình {$a}x^2 + {$b}x + {$c} vô nghiệm vì có giá trị Delta = {$delta} <0";
            }
                elseif ($delta == 0) {
                    $x1 = -1*$b/(2*$a);
                    echo "Phương trình {$a}x^2 + {$b}x + {$c} có nghiệm kép vì có giá trị Delta = {$delta} = 0, nghiệm của phương trình là: ". $x1;
                }
                elseif ($delta > 0) {
                        $x1 = (-1*$b + sqrt($delta))/(2*$a);
                        $x2 = (-1*$b - sqrt($delta))/(2*$a);
                        echo "Phương trình {$a}x^2 + {$b}x + {$c} có nghiệm 2 nghiệm phân biệt vì có giá trị Delta = {$delta} >0 <br>";
                        echo "Nghiệm x1 của phương trình là: ". $x1 . "<br>";
                        echo "Nghiệm x2 của phương trình là: ". $x2;
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