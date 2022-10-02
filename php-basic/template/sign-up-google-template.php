<?php
    require 'function-make-by-thamvpham.php';
    $site_title = "Sign up account with google template";
    html_head_bootstrap_jquery($site_title);
    html_body_start();
?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <h1>Google</h1>
                <h3>Tạo tài khoản Google</h3>
                <div class="form-row">
                    <div class="col-md-6">
                    <?php
                        echo create_input_text_bootstrap("firstname_id", "Họ", "firstname", "text", $class_label = array('bg-light', 'text-primary','font-weight-bold'), $class_input = array('','',''));
                    ?>
                    </div>
                    <div class="col-md-6">
                    <?php
                        echo create_input_text_bootstrap("lastname_id", "Tên", "lastname", "text", $class_label = array('bg-light', 'text-primary','font-weight-bold'), $class_input = array('','',''));
                    ?>
                    </div>

                
                    <div class="col-md-12 form-group form-check mx-3">
                        <input type="checkbox" class="form-check-input" id="terms_condiction" name="terms-condiction">
                        <lable for="terms_condiction" class="form-check-lable">Đã đọc, hiểu và đồng ý với <a href="#">chính sách bảo mật thông tin</a></label>
                    </div>

                
                </div>



                <?php
                    echo create_button_bootstrap("btn-sign-up", "Đăng ký", "sign-up", $button_class = array('btn-primary', '', ''));
                ?>

            </form>
        </div>
    </div>
</div>
















<?php
    html_body_end();
    html_end();
?>