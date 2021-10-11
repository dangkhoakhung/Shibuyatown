<?php
include('connect.php');
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			header('Location:cart.php?quanly=giohang');
		}
	}
?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Đăng ký</title>
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
                                            <

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
                                                            <li><a href="shop.php"> TOP</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="t-shirt.html">T-SHIRT</a></li>
                                                                            <li><a href="hoodie.html">HOODIE</a></li>
                                                                            <li><a href="Jacket.html">JACKET</a></li>
                                                                          
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
                                                            <li><a href=""> TOP</a>
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
                                                <li>ĐĂNG KÝ</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--breadcrumbs area end-->

                       <!-- admin login start -->
                        <div class="customer_login">
                            <div class="row">
                                       <!--login area start-->
                                        <div class="col-lg-6 col-md-6">
                                            <div class="account_form">
                                                <h2>Đăng ký</h2>
                                                <form action="" method="POST">
                                                    <p>   
                                                        <label>Tên đăng ký<span>*</span></label>
                                                        <input type="text" name="hovaten">
                                                     </p>
                                                     <p>   
                                                        <label>Email <span>*</span></label>
                                                        <input type="email" name="email">
                                                     </p> 
                                                     <p>   
                                                        <label>Điện thoại <span>*</span></label>
                                                        <input type="text" name="dienthoai">
                                                     </p> 
                                                     <p>   
                                                        <label>Địa chỉ <span>*</span></label>
                                                        <input type="text" name="diachi">
                                                     </p> 
                                                     <p>   
                                                        <label>Mật khẩu <span>*</span></label>
                                                        <input type="password" name="matkhau">
                                                     </p>          
                                                    <div class="login_submit" style="float:left;">
                                                        <button type="submit" name="dangky">Đăng ký</button>
        
                                                    </div>
                                                    

                                                </form>
                                                
                                             </div>    
                                        </div>
                                        <!--login area start-->

                                        
                                    </div>
                        </div>
                        <!-- admin login end -->

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
