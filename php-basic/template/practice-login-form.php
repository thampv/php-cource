<?php
    require 'function-make-by-thamvpham.php';
    $site_title = "Practice Login Form V1";
    html_head_bootstrap_jquery($site_title);
    html_body_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">

                <h3 class="text-primary">Đăng nhập</h3>
                <p class="text-secondary text-justify">Đăng nhập để có thể sử dụng đầy đủ dịch vụ của chúng tôi</p>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="email" class="form-control bg-light" id="email" name="email" placeholder="Email *" required>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="password" class="form-control bg-light" id="password" name="password" placeholder="Mật khẩu *" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary" id="btn_login" name="btn_login">Đăng ký</button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <p class="text-secondary">Bạn chưa có tài khoản? Hãy <a href="./practice-sign-up-form.php">Đăng ký</a> ngay</p>
                    </div>
                    <div class="col-md-12">
                        <p class="text-secondary">Bạn quên mật khẩu? <a href="./practice-forget-password-form.php">Nhấn vào đây</a></p>
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