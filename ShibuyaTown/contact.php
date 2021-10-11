<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LIÊN HỆ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">

        <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\css\plugin.css">
        <link rel="stylesheet" href="assets\css\bundle.css">
        <link rel="stylesheet" href="assets\css\style.css">
        <link rel="stylesheet" href="assets\css\responsive.css">
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <!--header middel-->
        <div class="header_middel">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
                        <a href="index.php"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header_right_info">
                        <div class="search_bar">
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="shopping_cart">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                Giỏ hàng<i class="fa fa-angle-down"></i>
                            </a>

                            <!--mini cart-->
                            <div class="mini_cart">
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets\img\cart\cart.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">lorem ipsum dolor</a>
                                        <span class="cart_price">$115.00</span>
                                        <span class="quantity">Qty: 1</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a title="Remove this item" href="#">
                                            <i class="fa fa-times-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="assets\img\cart\cart2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Quisque ornare dui</a>
                                        <span class="cart_price">$105.00</span>
                                        <span class="quantity">Qty: 1</span>
                                    </div>
                                    <div class="cart_remove">
                                        <a title="Remove this item" href="#">
                                            <i class="fa fa-times-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shipping_price">
                                    <span>
                                        Shipping
                                    </span>
                                    <span>
                                        $7.00
                                    </span>
                                </div>
                                <div class="total_price">
                                    <span>
                                        total
                                    </span>
                                    <span class="prices">
                                        $227.00
                                    </span>
                                </div>
                                <div class="cart_button">
                                    <a href="checkout.html">
                                        Check out</a>
                                </div>
                            </div>
                            <!--mini cart end-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <div class="header_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="main_menu_inner">
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="index.php">
                                            <i class="fa fa-home"></i>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="shop.php">
                                            TOP</a>

                                        <!--hien thi sp len nav-->
                                        <?php
                                                                            include('connect.php');
	                                                                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	                                                                         $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                                                             
                                                                        ?>
                                        <div class="mega_menu jewelry">
                                            <div class="mega_items jewelry">
                                                <?php
                                                                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                                                        ?>
                                                <ul>
                                                    <li>
                                                        <a
                                                            href="shop.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                                                    </li>

                                                </ul>
                                                <?php
                                                                            }
                                                                        ?>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">BOTTOM</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">

                                                    <ul>
                                                        <li>
                                                            <a href="#">PANTS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">SHORT</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#">
                                            FOOTWEAR</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">

                                                    <ul>
                                                        <li>
                                                            <a href="#">ADIDAS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">NIKE</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">MLB</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">OTHER</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">ACCESSORIES</a>
                                        <div class="mega_menu">
                                            <div class="mega_top fix">
                                                <div class="mega_items">
                                                    <ul>
                                                        <li>
                                                            <a href="#">RING</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">BAG</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">MASK</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">GLASSES</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">HAT</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </li>

                                    <li>
                                        <a href="contact.php">liên hệ</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu d-lg-none">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="index.html">
                                            <i class="fa fa-home"></i>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            TOP</a>
                                        <div class="mega_menu jewelry">
                                            <div class="mega_items jewelry">
                                                <ul>
                                                    <li>
                                                        <a href="shop-fullwidth.html">T-SHIRT</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth.html">HOODIE</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-fullwidth.html">JACKET</a>
                                                    </li>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">BOTTOM</a>
                                            <div class="mega_menu">
                                                <div class="mega_top fix">
                                                    <div class="mega_items">

                                                        <ul>
                                                            <li>
                                                                <a href="#">PANTS</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">SHORT</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#">
                                                FOOTWEAR</a>
                                            <div class="mega_menu">
                                                <div class="mega_top fix">
                                                    <div class="mega_items">

                                                        <ul>
                                                            <li>
                                                                <a href="#">ADIDAS</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">NIKE</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">MLB</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">OTHER</a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">ACCESSORIES</a>
                                            <div class="mega_menu">
                                                <div class="mega_top fix">
                                                    <div class="mega_items">
                                                        <ul>
                                                            <li>
                                                                <a href="#">RING</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">BAG</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">MASK</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">GLASSES</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">HAT</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>

                                            </div>
                                        </li>

                                        <li>
                                            <a href="contact.php">contact us</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header end -->
        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li>
                                <a href="index.html">TRANG CHỦ</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>LIÊN HỆ</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <!--contact area start-->
        <div class="contact_area">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_message">
                        <h3>Để lại lời nhắn</h3>
                        <form id="contact-form" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input name="first_name" placeholder="Tên của bạn *" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <input name="email" placeholder="Email *" type="email">
                                </div>

                                <div class="col-lg-12">
                                    <input name="phone" placeholder="Số điện thoại *" type="text">
                                </div>

                                <div class="col-12">
                                    <div class="contact_textarea">
                                        <textarea placeholder="Tin nhắn *" name="nhucau" class="form-control2"></textarea>
                                    </div>
                                    <button type="submit" name="submit">
                                        GỬI
                                    </button>
                                </div>

                                <div class="col-12">
                                    <p class="form-messege"></div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="contact_message contact_info">
                            <h3>Liên hệ</h3>
                            <p>
                                <b>Chi nhánh trung tâm</b>
                            </p>
                            <p>
                                586 Nguyễn Đình Chiểu - Phường 04 - Quận 3 - Hồ Chí Minh</p>
                            <p>
                                <i class="fa fa-phone">Hotline: 0932 728 840</i>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <!--contact area end-->

            <!--contact map start-->
            <div class="contact_map">
                <div class="row">
                    <div class="col-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb"
                            width="500"
                            height="450"
                            style="border:0"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <!--contact map end-->

        </div>
        <!--pos page inner end-->
    </div>
</div>
<!--pos page end-->

<!--footer area start-->
<div class="footer_area">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3>Liên hệ</h3>

                        <div class="footer_widget_contect">
                            <p>
                                <b>Chi nhánh trung tâm</b>
                            </p>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                586 Nguyễn Đình Chiểu - Phường 04 - Quận 3 - Hồ Chí Minh</p>

                            <p>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                0932 728 840</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3>Shopping</h3>
                        <ul>
                            <li>
                                <a href="#">All products</a>
                            </li>
                            <li>
                                <a href="#">Top</a>
                            </li>
                            <li>
                                <a href="#">Bottom</a>
                            </li>
                            <li>
                                <a href="#">Accessories</a>
                            </li>
                            <li>
                                <a href="#">Size chart</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <h3>Hướng dẫn</h3>
                        <ul>
                            <li>
                                <a href="#">Điều khoản sử dụng</a>
                            </li>
                            <li>
                                <a href="#">Điều khoản giao dịch</a>
                            </li>
                            <li>
                                <a href="#">Dịch vụ tiện ích</a>
                            </li>
                            <li>
                                <a href="#">Quyền sở hữu trí tuệ</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_widget">
                        <ul>
                            <li>
                                <a href="#">
                                    Trang chủ</a>
                            </li>
                            <li>
                                <a href="#">
                                    Sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lịch sử
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Khuyến mãi
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">

                        <p>Bản quyền © 2020 -
                            <a href="#">SHIBUYA TOWN</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_social text-right">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="pinterest" href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-wifi" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--footer area end-->

<!-- all js here -->
<script src="assets\js\vendor\jquery-1.12.0.min.js"></script>
<script src="assets\js\popper.js"></script>
<script src="assets\js\bootstrap.min.js"></script>
<script src="assets\js\ajax-mail.js"></script>
<script src="assets\js\plugins.js"></script>
<script src="assets\js\main.js"></script>
</body>
</html>