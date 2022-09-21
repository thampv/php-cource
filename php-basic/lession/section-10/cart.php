
<?php
    $site_title = "cart page";
    $input_text_1 = create_input_text_bootstrap("input_text_1", "Fullname", "username", "text", $class_label = array('bg-light', 'text-primary','font-weight-bold'), $class_input = array('','',''));
    $button_1 = create_button_bootstrap("btn-dang-nhap", "Đăng nhập", "login", $button_class = array('btn-primary', '', ''));
    $html_content = "

        <div class='container'>
        <h1 class='text-primary'>Chào mừng bạn đến với trang giỏ hàng</h1>
            <div class='row'>
                <div class='col-md-12'>

                </div>
            </div>
        </div>
    
    "
    ;
    html_head_bootstrap_jquery($site_title);
    html_body_start();
    html_content($html_content);
    html_body_end();
    html_end();
?>





<!-- FUNCTION MAKE BY ME -->

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
# 5. html_content ==> write html content
# 6. create_input_text_bootstrap ==> create an input tag using bootstrap with 6 parameters
# 7. Create_button_bootstrap ==> create a button tag using bootstrap with 3 parameters
# 8. html_body_start ==> write open html tag <html>
# 9. html_body_end ==> wirte close html tag </html> 

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

# 5. Html_content

function html_content($html_content) {
    echo $html_content;
}

# 6. Create_input_text_bootstrap ==> create an input tag using bootstrap with 4 parameters
# 6.1 Parameter 1: id of input tag
# 6.2 Parameter 2: label name of input tag
# 6.3 Parameter 3: name of input tag
# 6.4 Parameter 4: input type: "text"/"Password"
# 6.5 Parameter 5: class of label tag => is array with max 3 value
# 6.6 Parameter 6: class of input tag => is array with max 3 value
# example:
    //=================================================
    /* create_input_text_bootstrap("username_id", "Fullname", "username", $class_label = array('bg-light', 'text-primary','font-weight-bold'), $class_input = array('','','')) */
    //=================================================

    function create_input_text_bootstrap(){
        $parameter_array = func_get_args();
        $id_input_text = $parameter_array[0];
        $label_name_input_text = $parameter_array[1];
        $input_name = $parameter_array[2];
        $input_type = $parameter_array[3];
        $class_label_input_text = $parameter_array[4];
        $class_input_text = $parameter_array[5];
        $input_text_html = "
        <div class='form-group'>
            <label for='{$id_input_text}' class='{$class_label_input_text[0]} {$class_label_input_text[1]} {$class_label_input_text[2]}'>{$label_name_input_text}</label>
            <input type='{$input_type}' class='form-control {$class_input_text[0]} {$class_input_text[1]} {$class_input_text[2]}' name='{$input_name}' id='{$id_input_text}'>
        </div>
        ";
        return $input_text_html;
    }

# 7. Create_button_bootstrap ==> create a button tag using bootstrap with 3 parameters
# 7.1 Parameter 1: name button tag
# 7.2 Parameter 2: label button tag
# 7.3 Parameter 3: value button
# 7.4 Parameter 4: class of button tag is array with max 3 value
# example:
    //=================================================
    /* create_input_text_bootstrap("username_id", "Fullname", "username", $class_label = array('bg-light', 'text-primary','font-weight-bold'), $class_input = array('','','')) */
    //=================================================

    function create_button_bootstrap(){
        $parameter_array = func_get_args();
        $button_name = $parameter_array[0];
        $button_label = $parameter_array[1];
        $button_value = $parameter_array[2];
        $button_class = $parameter_array[3];
        $button_html = "
        
        <button name='{$button_name}' value='{$button_value}' class='btn btn-block {$button_class[0]} {$button_class[1]} {$button_class[2]}'>{$button_label}</button>

        ";
        return $button_html;
    }

# 8. html_body_start

function html_body_start() {
    echo "
<body>";
}

# 9. html_body_end

function html_body_end() {
    echo "
</body>";
}

?>