   <!-- Footer Section Begin -->
   <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo1.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Hà Nội</li>
                            <li>Phone: 0981234567</li>
                            <li>Email: shop@gmaill.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>HÀ NỘI</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    </div>
    <div class="modal_dangnhap">
        <form action="index.php?act=dangnhap" method="post">
            <div class="modal-container">
                <div class="modal-close">
                    <i class="ti-close"></i>
                </div>
                <header class="modal-header">
                    <i class="ti-user"></i>
                    Đăng nhập
                </header>

                <div class="modal-body">
                    <label for="" class="modal-lable">
                        <i class="ti-user"></i>
                        Tên đăng nhập
                    </label>
                    <input type="text" class="modal-input" name="username" placeholder="Nhập tên đăng nhập">

                    <label for="" class="modal-lable">
                        <i class="ti-user"></i>
                        Mật khẩu
                    </label>
                    <input type="password" class="modal-input" name="password" placeholder="Mật khẩu">

                    <button id="buy-tickets" type="submit" name="dangnhap">
                        Gửi <i class="ti-check"></i>
                    </button>
                    <?php if (isset($loginMess)&&$loginMess != '') {
                        echo $loginMess;
                    } ?>
                </div>
                <footer class="modal-footer">
                    <p class="modal-help"><a href="?act=dangky">Đăng kí tài khoản</a></p>
                    <p class="modal-help"><a href="?act=dangky">Quên mật khẩu</a></p>
                </footer>
            </div>
        </form>
    </div>
    <script>
        const buyBtns = document.querySelectorAll('.js-buy-tickets');
        const modal = document.querySelector(".modal_dangnhap");
        const modalClose = document.querySelector('.modal-close');
        const modalContainer = document.querySelector('.modal-container');
        function showBuyTickets(){
            modal.classList.add('open');
        }
        function hideBuyTickets(){
            modal.classList.remove('open');
        }
        for(const buyBtn of buyBtns) {
            buyBtn.addEventListener('click', showBuyTickets)
        }
        modalClose.addEventListener('click', hideBuyTickets);

        modal.addEventListener('click', hideBuyTickets);

        modalContainer.addEventListener('click', function (event) {
            event.stopImmediatePropagation();
        })
    </script>
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>

