<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TẤT CẢ SẢN PHẨM</title>
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
                                    <div class="col-lg-6 col-md-6">
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
                                    <div class="col-lg-3 col-md-3">
                                        <div class="logo">
                                            <a href="index.php"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                                        </div>
                                    </div>
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

                                                               <!--hien thi sp len index-->
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
                                                            <li class="active"><a href="index.php"><i class="fa fa-home"></i></a>
                        
                                                            </li>
                                                            <li><a href="shop.php"> TOP</a>
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
                        <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="index.php">TRANG CHỦ</a></li>
                                                <li><i class="fa fa-angle-right"></i></li>
                                                <li>SẢN PHẨM</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!--pos home section-->
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                    <div class="col-lg-3 col-md-12">
                                       <!--layere categorie"-->
                                       <div class="sidebar_widget catrgorie mb-35">
                                        <h3>Categories</h3>
                                        <ul>
                                            <li class="has-sub"><a href="allproduct.php"><i class="fa fa-caret-right"></i> Top</a>
                                                <ul class="categorie_sub">

                                                <?php

                                                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                                                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc );
                                                    while($row = mysqli_fetch_array($query_danhmuc)){
                                                ?>        
                                                    <li><a href="shop.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><i class="fa fa-caret-right"></i><?php echo $row['tendanhmuc'] ?></a></li>
                                                                   
                                                <?php
                                                    }
                                                ?>       
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
                                        <!--layere categorie end-->
                                       
                                    </div>
                                    <div class="col-lg-9 col-md-12">
                                        <!--banner slider start-->
                                        <div class="banner_slider mb-35">
                                            <img src="assets\img\banner\bannner10.jpg" alt="">
                                        </div> 
                                        <!--banner slider start-->

                                        <!--shop toolbar start-->
                                          <?php
                                                
                                                $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
                                                 $query_pro = mysqli_query($mysqli,$sql_pro);
                                                 //get tendanhmuc
                                                 $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
                                                 $query_cate = mysqli_query($mysqli,$sql_cate);
                                                 $row_title = mysqli_fetch_array($query_cate);
                                          ?>    
                                        <div class="shop_toolbar ">
                                           
                                        <h3>Danh mục sản phẩm : <?php echo $row_title['tendanhmuc'] ?></h3>
                                            
                                            <div class="select_option">
                                                <form action="#">
                                                    <label><b>Sắp xếp theo</b></label>
                                                    <select name="orderby" id="short">
                                                        <option selected="" value="1">Mới nhất</option>
                                                        <option value="1">Phổ biến</option>
                                                        <option value="1">Bán chạy</option>
                                                        <option value="1">Từ A-Z </option>
                                                        <option value="1">Từ Z-A</option>
                                                        <option value="1">Giá tăng dần</option>
                                                        <option value="1">Giá giảm dần</option>
                                                        
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!--shop toolbar end-->
                                           <div class="maincontent">
                                               
                                                <ul class="product_list">
                                                <?php 
                                                    while($row_pro = mysqli_fetch_array($query_pro)) {
                                                ?>        
                                                    <li>
                                                        <a style="text-align:center;" href="single-product.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                                                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" >
                                                            <p class="price_product"><b><?php echo number_format($row_pro['giasp'],0,',',',').'đ' ?></b></p>
                                                            <p class ="title_product"><?php echo $row_pro['tensanpham']?></p>

                                                        </a>
                                                    </li>     
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                           
                                           </div>
                                                                         
                                
                                        <!--pagination style start--> 
                                        <div class="clear">
                                            <div class="pagination_style">
                                                
                                                <div class="page_number">
                                                    <span>Pages: </span>
                                                    <ul>
                                                        <li>«</li>
                                                        <li class="current_number">1</li>
                                                        <li><a href="#">2</a></li>
                                                        <li>»</li>
                                                    </ul>
                                                </div>
                                            </div>


                                        </div>
                                        <!--pagination style end--> 
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
