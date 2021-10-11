<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SHIBUYA TOWN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\css\plugin.css">
        <link rel="stylesheet" href="assets\css\bundle.css">
        <link rel="stylesheet" href="assets\css\style.css">
        <link rel="stylesheet" href="assets\css\responsive.css">
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                               <!--header top--> 
                                <div class="header_top">
                                   <div class="row align-items-center">
                                        <div class="col-6 col-md-6">
                                           <div class="info">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i> Giờ mở cửa: 10:00 - 21:00  </li>

                                                    <li style="margin-left:10px;"><i class="fa fa-phone"></i> Hotline: 0932 728 840</li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="header_links">
                                                <ul>
                                                    <li><a href="cart.php" title="My cart"><i class="fa fa-shopping-basket"></i> Giỏ hàng của tôi</a></li>
                                                    <li><a href="login.php" title="Login"> Đăng nhập</a></li>
                                                </ul>
                                            </div>   
                                        </div>
                                   </div> 
                                </div> 
                                <!--header top end-->

                                <!--header middel--> 
                                <div class="header_middel">
                                    <div class="row align-items-center">
                                       <!--logo start-->
                                        <div class="col-lg-3 col-md-3">
                                            <div class="logo">
                                                <a href="index.php"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                                            </div>
                                        </div>
                                        <!--logo end-->
                                        <div class="col-lg-9 col-md-9">
                                            <div class="header_right_info">
                                                <div class="search_bar">
                                                    <form action="#">
                                                        <input placeholder="Tìm kiếm..." type="text">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </form>
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
                                                            <li class="active"><a href="index.php"><i class="fa fa-home"></i></a>
                        
                                                            </li>
                                                            <li><a href="allproduct.php"> TOP</a>
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
                                                                            <li><a href="shop.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                                                                           
                                                                        </ul>
                                                                        <?php
                                                                            }
                                                                        ?> 
                                                                         </div>
                                                                </div>       
                                                            </li>
                                                            <li><a href="#">BOTTOM</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            
                                                                            <ul>
                                                                                <li><a href="#">PANTS</a></li>
                                                                                <li><a href="#">SHORT</a></li>
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li><a href="#"> FOOTWEAR</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            
                                                                            <ul>
                                                                                <li><a href="#">ADIDAS</a></li>
                                                                                <li><a href="#">NIKE</a></li>
                                                                                <li><a href="#">MLB</a></li>
                                                                                <li><a href="#">OTHER</a></li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                  
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">ACCESSORIES</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">                       
                                                                            <ul>
                                                                                <li><a href="#">RING</a></li>
                                                                                <li><a href="#">BAG</a></li>
                                                                                <li><a href="#">MASK</a></li>
                                                                                <li><a href="#">GLASSES</a></li>
                                                                                <li><a href="#">HAT</a></li>
                                                                            </ul>
                                                                        </div>
        
                                                                    </div>

                                                                </div>
                                                            </li>
                                                           
                                                            <li><a href="contact.php">liên hệ</a></li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="mobile-menu d-lg-none">
                                                    <nav>
                                                        <ul>
                                                            <li class="active"><a href="index.html"><i class="fa fa-home"></i></a>
                        
                                                            </li>
                                                            <li><a href="shop.html"> TOP</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="shop-fullwidth.html">T-SHIRT</a></li>
                                                                            <li><a href="shop-fullwidth.html">HOODIE</a></li>
                                                                            <li><a href="shop-fullwidth.html">JACKET</a></li>
                                                                          
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                            <li><a href="#">BOTTOM</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            
                                                                            <ul>
                                                                                <li><a href="#">PANTS</a></li>
                                                                                <li><a href="#">SHORT</a></li>
                                                                               
                                                                            </ul>
                                                                        </div>
                                                                      
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li><a href="#"> FOOTWEAR</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">
                                                                            
                                                                            <ul>
                                                                                <li><a href="#">ADIDAS</a></li>
                                                                                <li><a href="#">NIKE</a></li>
                                                                                <li><a href="#">MLB</a></li>
                                                                                <li><a href="#">OTHER</a></li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                  
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li><a href="#">ACCESSORIES</a>
                                                                <div class="mega_menu">
                                                                    <div class="mega_top fix">
                                                                        <div class="mega_items">                       
                                                                            <ul>
                                                                                <li><a href="#">RING</a></li>
                                                                                <li><a href="#">BAG</a></li>
                                                                                <li><a href="#">MASK</a></li>
                                                                                <li><a href="#">GLASSES</a></li>
                                                                                <li><a href="#">HAT</a></li>
                                                                            </ul>
                                                                        </div>
        
                                                                    </div>

                                                                </div>
                                                            </li>
                                                     
                                                            <li><a href="contact.php">liên hệ</a></li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--header end -->

                        <!--pos home section-->
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                <div class="col-lg-3 col-md-8 col-12">
                                   <!--sidebar banner-->
                                    <div class="sidebar_widget banner mb-35">
                                        <div class="banner_img mb-35">
                                            <a href="#"><img src="assets\img\banner\banner5.jpg" alt=""></a>
                                        </div>
                                        <div class="banner_img">
                                            <a href="#"><img src="assets\img\banner\banner6.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <!--sidebar banner end-->

                                    <!--categorie menu start-->
                                    <div class="sidebar_widget catrgorie mb-35">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Top</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> T-shirt</a>
                                                       
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Hoodie</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Jacket</a></li>                 
                                                </ul>     
                                            </li>
                                            <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Bottom</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Pants</a>
                                                        
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Short</a></li>
                                                   
                                                </ul> 
                                            </li>
                                            <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Footwear</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Adidas</a>
                                                       
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Nike</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Mlb</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Other</a></li>
                                                </ul> 

                                            </li>
                                            <li class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> Accessories</a>
                                                <ul class="categorie_sub">
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Ring</a>
                                                       
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Bag</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Mask</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Glasses</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i> Hat</a></li>
                                                </ul> 
                                            </li>
 
                                        </ul>
                                    </div>
                                    <!--categorie menu end-->
 
                                    <!--sidebar banner-->
                                    <div class="sidebar_widget bottom ">
                                        <div class="banner_img">
                                            <a href="#"><img src="assets\img\banner\banner9.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <!--sidebar banner end-->



                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <!--banner slider start-->
                                    <div class="banner_slider slider_1">
                                        <div class="slider_active owl-carousel">
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slide_1.png)">
                                                <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>New Arrivals</h1>
                                                        <p>NIKE AIR JORDAN 1 MID DIGITAL PINK CW5379 600 #VHI </p>
                                                        <a href="#">Mua ngay</a>
                                                    </div>     
                                                </div>    
                                            </div>
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slider_2.png)">
                                                <div class="slider_content">
                                                    <div class="slider_content_inner">  
                                                        <h1>New Collection</h1>
                                                        <p>NEW YORK YANKEES MLBlike SHORT SLEEVE T-SHIRT </p>
                                                        <a href="#">Xem Ngay</a>
                                                    </div>         
                                                </div>         
                                            </div>
                                            <div class="single_slider" style="background-image: url(assets/img/slider/slider_3.png)">
                                                <div class="slider_content">  
                                                    <div class="slider_content_inner">  
                                                        <h1>Lowkey Accessories</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                                                        <a href="#">Xem Ngay</a>
                                                    </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div> 
                                    <!--banner slider start-->

                                    <!--new product area start-->
                                    <div class="new_product_area">
                                        <div class="block_title">
                                            <h3>NEW ARRIVALS</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="allproduct.php"><img src="assets\img\product\product1.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">3,800,000đ</span>
                                                            <h3 class="product_title"><a href="allproduct.php">DREW HOUSE MASCOT SS POLKA DOT TEE #TT</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                            
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="allproduct.php"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">6,500,000đ</span>
                                                            <h3 class="product_title"><a href="allproduct.php">OFFWHITE BLACK MARKER S/S OVER TEE BLACK BLACK #TC</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                               
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="allproduct.php"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">6,500,000đ</span>
                                                            <h3 class="product_title"><a href="allproduct.php">OFFWHITE BLUE MARKER S/S OVER TEE WHITE BLUE #TC</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="allproduct.php"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">6,500,000đ</span>
                                                            <h3 class="product_title"><a href="allproduct.php">OFFWHITE SPRAYED CARAVAGG S/S OVER WHITE WHITE #TC</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                               
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="allproduct.php"><img src="assets\img\product\product6.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">4,200,000đ</span>
                                                            <h3 class="product_title"><a href="allproduct.php">NIKE AIR JORDAN 1 MID PASTEL BLACK TOE (GS) 554725 175 #BND-HD</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"> CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>       
                                    </div> 
                                    <!--new product area start-->  

                                    <!--featured product start--> 
                                    <div class="featured_product">
                                        <div class="block_title">
                                            <h3>TOP SNEAKER</h3>
                                        </div>
                                        <div class="row">
                                            <div class="product_active owl-carousel">
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="assets\img\product\product7.jpg" alt=""></a> 
                                                           <div class="hot_img">
                                                               <img src="assets\img\cart\span-hot.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">6,800,000đ</span>
                                                            <h3 class="product_title"><a href="single-product.html">NIKE AIR JORDAN 1 RETRO AJKO CHICAGO DA9089 100 #BND-M</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                                
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="assets\img\product\product8.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">10,800,000đ</span>
                                                            <h3 class="product_title"><a href="single-product.html">NIKE AIR JORDAN 1 HIGH WHITE UNIVERSITY BLUE BLACK 555088 134 #B5 #ND</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                      
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="single_product">
                                                        <div class="product_thumb">
                                                           <a href="single-product.html"><img src="assets\img\product\product9.jpg" alt=""></a> 
                                                           <div class="img_icone">
                                                               <img src="assets\img\cart\span-new.png" alt="">
                                                           </div>
                                                           <div class="product_action">
                                                               <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                                           </div>
                                                        </div>
                                                        <div class="product_content">
                                                            <span class="product_price">19,000,000đ</span>
                                                            <h3 class="product_title"><a href="single-product.html">NIKE DUNK LOW “OFF WHITE” UNIVERSITY RED CT0856 600 #VX</a></h3>
                                                        </div>
                                                        <div class="product_info">
                                                            <ul>
                                                               
                                                                <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">CHI TIẾT</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                                           
                                            </div> 
                                        </div> 
                                    </div>     
                                    <!--featured product end--> 

                                    <!--banner area start-->
                                    <div class="banner_area mb-60">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single_banner">
                                                    <a href="#"><img src="assets\img\banner\banner7.jpg" alt=""></a>
                                                    <div class="banner_title">
                                                        <p>Up to <span> 20%</span> off</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single_banner">
                                                    <a href="#"><img src="assets\img\banner\banner8.jpg" alt=""></a>
                                                    <div class="banner_title title_2">
                                                        <p>sale off <span> 30%</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                    <!--banner area end--> 
                                   
                                </div>
                            </div>  
                        </div>
                        <!--pos home section end-->
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
                                        <p><b>Chi nhánh trung tâm</b></p>
                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 
                                            586 Nguyễn Đình Chiểu - Phường 04 - Quận 3 - Hồ Chí Minh</p>

                                        <p><i class="fa fa-mobile" aria-hidden="true"></i> 0932 728 840</p>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Shopping</h3>
                                    <ul>
                                        <li><a href="#">All products</a></li>
                                        <li><a href="#">Top</a></li>
                                        <li><a href="#">Bottom</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Size chart</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">
                                    <h3>Hướng dẫn</h3>
                                    <ul>
                                        <li><a href="#">Điều khoản sử dụng</a></li>
                                        <li><a href="#">Điều khoản giao dịch</a></li>
                                        <li><a href="#">Dịch vụ tiện ích</a></li>
                                        <li><a href="#">Quyền sở hữu trí tuệ</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="footer_widget">      
                                    <ul>
                                        <li><a href="#"> Trang chủ</a></li>
                                        <li><a href="#"> Sản phẩm </a></li>
                                        <li><a href="#"> Lịch sử </a></li>
                                        <li><a href="#"> Khuyến mãi </a></li>
                                       
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
                                   
                                    <p>Bản quyền © 2020 - <a href="#">SHIBUYA TOWN</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="footer_social text-right">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        
                                        <li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
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
