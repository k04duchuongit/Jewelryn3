<?php 
extract($account_user);
?>
<div class="main">
            <div class="grid wide signinsignup">
                <div class="row">
                    <div class="col l-12">
                        <div class="signup">
                            <h5>Chỉnh sửa tài khoản</h5>
                            <form action="index.php?act=chinhsuataikhoan_update" method="POST">
                            <div class="signinsignup-input">
                                    <input type="hidden" name="id_user" value ="<?= $id_nguoidung?>">
                                </div>
                                <div class="signinsignup-input">
                                    <p>Tên đăng nhập</p>
                                    <input type="text"name="name_edit" value ="<?= $tendangnhap?>">
                                </div>
                                <div class="signinsignup-input">
                                <p>Số điện thoại</p>
                                    <input type="text" name="sdt_edit" value ="<?= $sodienthoai?>">
                                </div>
                                <div class="signinsignup-input">
                                <p>Địa chỉ</p>
                                    <input type="text" name="diachi_edit" value ="<?= $diachi?>">
                                </div>
                                <div class="signinsignup-input">
                                <p>Email</p>
                                    <input type="text" name="email_edit" value ="<?= $email?>">
                                </div>
                                <div class="signinsignup-input">
                                <p>Mật khẩu xác nhận</p>
                                    <input type="password" name="pass_edit">
                                </div>
                                
                                <p class="forgetpass_edit"><a href="">Quên mật khẩu ?</a></p>
                                <button type="submit" class="button_actsigninsignup" name="confirm_update_acc">Chỉnh sửa tài khoản</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>