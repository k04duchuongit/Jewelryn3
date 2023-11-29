<footer>
    <div class="grid wide footer-top">
        <div class="row">
            <div class="col l-3">
                <div class="footer-content">
                    <div class="header_top-namestore">
                        <p>Jewelryn3.</p>
                    </div>
                </div>
            </div>
            <div class="col l-3">
                <div class="footer-content">
                    <p class="title-box">LIÊN HỆ</p>
                    <ul>
                        <li><i class="ti-home"></i>Trinh Van Bo _ FPT Polytechnic</li>
                        <li><i class="ti-headphone"></i>+0962350923 - 1800-6886-666</li>
                        <li><i class="ti-email"></i>chamsocJewelryn3@gmail.com</li>
                        <li><i class="ti-location-pin"></i>Hệ thống cửa hàng</li>
                    </ul>
                </div>
            </div>
            <div class="col l-3">
                <div class="footer-content">
                    <p class="title-box">VỀ Jewelryn3.</p>
                    <ul>
                        <li>Chính Sách Bảo Mật</li>
                        <li>Điều khoản sự dụng</li>
                        <li>Chính sách đổi trả</li>
                        <li>Hướng dấn mua hàng</li>
                        <li>Hướng dẫn đo size</li>
                    </ul>
                </div>
            </div>
            <div class="col l-3">
                <div class="footer-content footer-content-network">
                    <p class="title-box">KẾT NỐI VỚI CHÚNG TÔI</p>
                    <ul>
                        <li><i class="fa-brands fa-facebook"><a href=""></a></i></li>
                        <li><i class="fa-brands fa-instagram"><a href=""></a></i></li>
                        <li><i class="fa-brands fa-youtube"><a href=""></a></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-license">
        <p>Powered By Jewelryn3. Fine Jewelry © 2023</p>
    </div>
</footer>
</div>
</body>
<script>
    var quantity__prd = 1;
    var summationButton = document.querySelector('.ti-minus__summation');
    var subtractionButton = document.querySelector('.ti-plus__subtraction');

    subtractionButton.addEventListener('click', function() {
        quantity__prd += 1;
        document.getElementById("quantity__prd").value = quantity__prd;
    });

    summationButton.addEventListener('click', function() {
        if (quantity__prd > 1) {
            quantity__prd -= 1;
            document.getElementById("quantity__prd").value = quantity__prd;
        }
    });


    //hiển thị giỏ hàng
    document.addEventListener('DOMContentLoaded', function() {
        var users_cart = document.querySelector('.users_cart');
        var carthidden = document.querySelector('.carthidden');

        users_cart.addEventListener('click', function() {
            // Toggle hiển thị/ẩn của phần tử "carthidden"
            carthidden.style.display = carthidden.style.display = 'block';
        });
    });
</script>
</html>