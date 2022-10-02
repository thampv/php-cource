<?php
    require 'function-make-by-thamvpham.php';
    $site_title = "Practice Forget Password Form V1";
    html_head_bootstrap_jquery($site_title);
    html_body_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">

                <h3 class="text-primary">Quên mật khẩu</h3>
                <p class="text-secondary text-justify">Hãy nhập lại địa chỉ email bạn đã đăng ký tài khoản, Chúng tôi sẽ gửi cho bạn một liên kết để đặt lại mật khẩu của bạn</p>
                <div class="form-row">
                    <div class="col-md-12">
                        <input type="email" class="form-control bg-light" id="email" name="email" placeholder="Email *" required>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary" id="btn_reset_password" name="btn-reset-password">Đặt lại mật khẩu</button>
                    </div>
                    <div class="col-md-12 mt-2">
                        <p class="text-secondary">Xem hướng dẫn đặt lại mật khẩu? <a href="#">Nhấn vào đây</a></p>
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