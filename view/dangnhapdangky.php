<div class="main">
            <div class="grid wide signinsignup">
                <div class="row">
                    <div class="col l-6">
                        <div class="signin">
                            <h5>Đăng nhập</h5>
                            <form action="index.php?act=dangnhap" method="POST">
                                <div class="signinsignup-input">
                                    <input type="text" placeholder="Tên đăng nhập" name="namesignin">
                                </div>
                                <div class="signinsignup-input">
                                    <input type="password" placeholder="Mật khẩu" name="passsignin">
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
                                    <input type="text" placeholder="Tên đăng nhập" name="namesignup">
                                </div>
                                <div class="signinsignup-input">
                                    <input type="password" placeholder="Mật khẩu" name="passsignup">
                                </div>
                                <div class="signinsignup-input">
                                    <input type="password" placeholder="Xác nhận khẩu" name="repasssignup">
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