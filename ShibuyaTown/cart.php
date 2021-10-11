
<?php
    session_start();
    
?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>GIỎ HÀNG</title>
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
                                    <div class="col-lg-3 col-md-3">
                                        <div class="logo">
                                            <a href="index.html"><img src="assets\img\logo\logo.jpg.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="header_right_info">
                                            <div class="search_bar">
                                                <form action="#">
                                                    <input placeholder="Search..." type="text">
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
                         <!--breadcrumbs area start-->
                         <div class="breadcrumbs_area">
                            <div class="row">
                                    <div class="col-12">
                                        <div class="breadcrumb_content">
                                            <ul>
                                                <li><a href="index.php">TRANG CHỦ</a></li>
                                                <li><i class="fa fa-angle-right"></i></li>
                                                <li>GIỎ HÀNG</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!--breadcrumbs area end-->
                        <?php
                            if(isset($_SESSION['dangky'])){
                                echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                                echo $_SESSION['id_khachhang'];
   
                            } 
                            ?>                                                 

                         <?php
                            if(isset($_SESSION['cart'])){

                            }   
                          ?>                                                      
                         <!--shopping cart area start -->
                        <div class="shopping_cart_area">
                            <form action="#"> 
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table_desc">
                                                <div class="cart_page table-responsive">
                                                    <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">quản lý</th>
                                                        <th class="product_thumb">hình ảnh</th>
                                                        <th class="product_total">Mã sản phẩm</th>
                                                        <th class="product_name">sản phẩm</th>
                                                        <th class="product-price">giá tiền</th>
                                                        <th class="product_quantity">số lượng</th>
                                                        <th class="product-price">thành tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    if(isset($_SESSION['cart'])){
                                                        foreach($_SESSION['cart'] as $cart_item){
                                                            $thanhtien =$cart_item['soluong']*$cart_item['giasp'];
                                                            $tongtien=0;
                                                            $tongtien+=$thanhtien;
                    
                                                ?>
                                                    <tr>
                                                       <td class="product_remove"><a href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                                                        <td class="product_thumb"><img src=" admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" ></a></td>
                                                        <td class="product_code"><?php  echo $cart_item['masp']; ?></td>
                                                        <td class="product_name"><?php  echo $cart_item['tensanpham']; ?></td>
                                                        <td class="product-price"><?php echo number_format($cart_item['giasp'],0,',',',').'đ' ;?></td>
                                                        <td class="product_quantity">
                                                        <a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                                                        <?php  echo $cart_item['soluong']; ?>
                                                        <a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
                                                        </td>
                                                        <td class="product_quantity"><?php echo number_format($thanhtien,0,',',',').'đ'; ?></td>


                                                    </tr>

                                                   <?php
                                                        }
                                                    }else{
                                                    
                                                    ?>    
                                                        <tr>
                                                            <td colspan="6"><p>Giỏ hàng trống</p></td>
                                                        </tr>
                                                    
                                                    
                                                    <?php    
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>   
                                                </div>  
                                                  
                                            </div>
                                         </div>
                                     </div>
                                     <!--coupon code area start-->
                                    <div class="coupon_area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>Coupon</h3>
                                                    <div class="coupon_inner">   
                                                        <p>Nhập mã ưu đãi của bạn nếu có</p>                                
                                                        <input placeholder="Mã ưu đãi" type="text">
                                                        <button type="submit">Áp dụng</button>
                                                    </div>    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="coupon_code">
                                                    <h3>tổng giá tiền đơn hàng</h3>
                                                    <div class="coupon_inner">
                                               
                                                       <div class="cart_subtotal">
                                                           <p>Tổng tiền</p>
                                                           <p class="cart_amount"><?php echo number_format($tongtien,0,',',',').'đ'; ?></p>
                                                           
                                                       </div>
                                                       <div class="checkout_btn">
                                                       <?php
                                                            if(isset($_SESSION['dangky'])){
                                                        ?>
                                                           <a href="thanhtoan.php">Đặt hàng</a>
                                                           <?php
                                                        }else{
                                                        ?>
                                                            <a href="signin.php?quanly=dangky">Đăng ký đặt hàng</a>
                                                        <?php
                                                         }
                                                        ?>   
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--coupon code area end-->
                                </form> 
                         </div>
                         <!--shopping cart area end -->

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
