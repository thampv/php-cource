<?php
    require 'function-make-by-thamvpham.php';
    $site_title = "Practice Sign Up Form V1";
    html_head_bootstrap_jquery($site_title);
    html_body_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                <h3 class="text-primary">Đăng ký</h3>
                <p class="text-secondary text-justify">Đăng ký tài khoản để có thể sử dụng đầy đủ dịch vụ của chúng tôi</p>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="first_name" name="first-name" placeholder="Họ">
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="text" class="form-control" id="middle_name" name="middle-name" placeholder="Họ lót">
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="text" class="form-control" id="last_name" name="last-name" placeholder="Tên *" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Điện thoại">
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu *" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="password" class="form-control" id="re_password" name="re-password" placeholder="Nhập lại mật khẩu *" required>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12 form-group form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="terms_condiction" name="terms-condiction">
                            <lable for="terms_condiction" class="form-check-lable">Đã đọc, hiểu và đồng ý với <a href="./privacy-policy.php">chính sách bảo mật thông tin</a></label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary" id="btn_sign_up" name="btn_sign-up">Đăng ký</button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <p class="text-secondary">Bạn đã có tài khoản? <a href="./practice-login-form.php">Đăng nhập</a> ngay</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-secondary">Xem hướng dẫn đăng ký tài khoản? <a href="#">Nhấn vào đây</a></p>
                    </div>

                </div>


            </form>
        </div>
    </div>
</div>






<?php
    html_body_end();
    html_end();
?>