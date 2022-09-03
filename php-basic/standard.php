
<?php
    $site_title = "Write code html using php function";
    $body_content = "

        <h1 class='text-primary'>Chào mừng đến với phương pháp viết code html bằng php</h1>
        <p class='bg-info'>Đây là nội dung của thẻ body</p>
    
    "
    ;
    html_head_bootstrap_jquery($site_title);
    html_body($body_content);
    html_end();
?>





<?php

//=================================================================
// LIST FUNCTION MAKE BY ME - DANH SÁCH HÀM TỰ PHÁT TRIỂN
//=================================================================

//=====================
// Index
//=====================

# 1. show_array function ==> print the elements of the array to the screen - in các phần tử của mảng ra màn hình
# 2. sum_multi_number ==> sum multiple numbers - tính tổng nhiều số
# 3. html_head_boostrap_jquery ==> write head tag content including bootstrap and jquery
# 4. html_end ==> write close html tag - viết thẻ đóng html
# 5. html_body ==> write body tag content

//============================================================================================================================
# 1. show_array function

function show_array($print_array){
    if(is_array($print_array)){
        echo "<pre>";
        print_r($print_array);
        echo "</pre>";
    }
}

# 2. Sum_multi_number

function sum_multi_number(){
    $sum = 0;
    $list_parameter = func_get_args();
    foreach($list_parameter as $value) {
        $sum += $value;
    }
    return $sum;
}

# 3. Html_head

function html_head_bootstrap_jquery($site_title) {
    $content_head = "
<!doctype html>
<html lang='en'>
    <head>
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

        <title>{$site_title}</title>
    </head>";
    echo $content_head;
}

# 4. Html_end

function html_end() {
    echo "
</html>";
}

# 5. Html_body

function html_body($body_content) {
    echo "
    <body>";
    echo $body_content;
    echo "
    </body>";
}

?>