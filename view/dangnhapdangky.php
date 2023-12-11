<div class="main">
    <div class="grid wide signinsignup">
        <div class="row">
            <div class="col l-6">
                <div class="signin">
                    <h5>Đăng nhập</h5>
                    <form action="index.php?act=dangnhap" method="POST">
                        <div class="signinsignup-input">
                            <input type="text" placeholder="Tên đăng nhập" name="namesignin">
                            <?php
                            if (!empty($checkvalidate_signin['namesignin'])) {
                                echo "<p class=\"mess_err\"> $checkvalidate_signin[namesignin] </p>";
                            } else {
                                if (!empty($checkvalidate_signin['namesignin_unduplicate'])) {
                                    echo "<p class=\"mess_err\"> $checkvalidate_signin[namesignin_unduplicate] </p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="signinsignup-input">
                            <input type="password" placeholder="Mật khẩu" name="passsignin">
                            <?php
                            if (!empty($checkvalidate_signin['passsignin'])) {
                                echo "<p class=\"mess_err\"> $checkvalidate_signin[passsignin] </p>";
                            }else{
                                if (!empty($checkvalidate_signin['checkpasssignin'])) {
                                    echo "<p class=\"mess_err\"> $checkvalidate_signin[checkpasssignin] </p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="action-signin">
                            <div class="memorizepass">
                                <input type="checkbox" name="memorizepass">
                                <p>Nhớ mật khẩu</p>
                            </div>
                            <p class="forgetpass"><a href="">Quên mật khẩu ?</a></p>
                        </div>
                        <button type="submit" class="button_actsigninsignup" name="dangnhap">Đăng nhập</button>
                    </form>
                </div>
            </div>

            <div class="col l-6">
                <div class="signup">
                    <h5>Đăng ký</h5>
                    <form action="index.php?act=dangky" method="POST">
                        <div class="signinsignup-input">
                            <input type="text" placeholder="Tên đăng nhập" name="namesignup" required>
                            <?php
                            if (!empty($checkvalidate_signup['namesignup'])) {
                                echo "<p class=\"mess_err\"> $checkvalidate_signup[namesignup] </p>";
                            } else {
                                if (!empty($checkvalidate_signup['namesignup_duplicate'])) {
                                    echo "<p class=\"mess_err\"> $checkvalidate_signup[namesignup_duplicate] </p>";
                                }
                            }
                            ?>
                        </div>
                        <div class="signinsignup-input">
                            <input type="password" placeholder="Mật khẩu" name="passsignup" required>
                            <?php
                            if (!empty($checkvalidate_signup['passsignup'])) {
                                echo "<p class=\"mess_err\"> $checkvalidate_signup[passsignup] </p>";
                            }
                            ?>
                        </div>
                        <div class="signinsignup-input">
                            <input type="password" placeholder="Xác nhận khẩu" name="repasssignup" required>
                            <?php
                            if (!empty($checkvalidate_signup['repasssignup'])) {
                                echo "<p class=\"mess_err\"> $checkvalidate_signup[repasssignup] </p>";
                            }
                            ?>
                        </div>
                        <div class="signinsignup-input">
                            <input type="text" placeholder="Nhập email" name="emailsignup">
                        </div>
                        <div class="signinsignup-input">
                            <input type="text" placeholder="Số điện thoại" name="sdtsignup">
                        </div>
                        <button type="submit" class="button_actsigninsignup" name="dangky">Đăng Ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>