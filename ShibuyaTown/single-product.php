<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CHI TIẾT SẢN PHẨM</title>
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
                                            <li>CHI TIẾT SẢN PHẨM</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->


                         <!--product wrapper start-->
                                            <?php
                                                
                                                 $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
                                                 $query_chitiet = mysqli_query($mysqli,$sql_chitiet );
                                                
                                                 while($row_chitiet = mysqli_fetch_array($query_chitiet)){
                                            ?>
                                             
                        <div class="product_details">
                            <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="product_tab fix"> 
                                           
                                            <div class="tab-content produc_tab_c">
                                                <div class="tab-pane fade show active" >
                                                    <div class="modal_img">
                                                        <a href="#"><img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" ></a>
                                                        
                                                        <div class="view_img">
                                                            <a class="large_view" href="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"><i class="fa fa-search-plus"></i></a>
                                                        </div>    
                                                    </div>
                                                </div>
                                               
                                               
                                            </div>

                                        </div> 
                                    </div>
                                    
                                    <div class="col-lg-7 col-md-6">
                                        <div class="product_d_right">
                                        <form method="POST" action="themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                                            <p>Danh mục:   <b><?php echo $row_chitiet['tendanhmuc'] ?></b></p>
                                            <h1 style="float:left;">(<?php echo $row_chitiet['masp'] ?>)</h1>
                                            <h1><?php echo $row_chitiet['tensanpham'] ?></h1>
                                            <div class="product_desc">
                                                <p><?php echo $row_chitiet['tomtat'] ?></p>
                                            </div>

                                            <div class="content_price mb-15">
                                                <span><?php echo number_format($row_chitiet['giasp'],0,',',',').'đ' ?></span>
                                                
                                            </div>
                                            
                                            <div class="product_d_size mb-20">
                                                <label for="group_1">size</label>
                                                <select name="size" id="group_1">
                                                    <option value="1">S</option>
                                                    <option value="2">M</option>
                                                    <option value="3">XL</option>
                                                    <option value="4">XXL</option>
                                                    
                                                </select>
                                                
                                            </div>

                                            

                                            <div class="product_stock mb-20">
                                                 
                                                <span><?php if($row_chitiet['tinhtrang']==1){
                                                    echo 'Còn hàng';
                                                }else{
                                                    echo 'Hết hàng';
                                                }                                                    
                                                ?>:  <?php echo $row_chitiet['soluong'] ?></span>
                                            <div class="box_quantity mb-20">
                                        
                                               <button class="themgiohang" type="submit" name="themgiohang"><i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</button>
                                               
                                           </div>    
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                    </form> 
                        </div>
                        <!--product details end-->


                        <!--product info start-->
                        <div class="product_d_info">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_d_inner">   
                                        <div class="product_info_button">    
                                            <ul class="nav" role="tablist">
                                                <li>
                                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">MÔ TẢ CHI TIẾT</a>
                                                </li>
                                                
                                                <li>
                                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">ĐÁNH GIÁ SẢN PHẨM</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                                <div class="product_info_content">
                                                    
                                                    <p><?php echo $row_chitiet['noidung'] ?></p>
                                                </div>    
                                            </div>

                                            
                                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                               
                                                
                                                <div class="product_review_form">
                                                    <form action="#">
                                                       
                                                        <p>Chưa có đánh giá nào </p>
                                                        <P>Hãy là người đầu tiên đánh giá sản phẩm <b><?php echo $row_chitiet['tensanpham'] ?></b></P>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                
                                                                <textarea name="comment" id="review_comment" placeholder="Viết bình luận của bạn"></textarea>
                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                               
                                                                <input id="author" type="text" placeholder="Nhập tên">

                                                            </div> 
                                                            <div class="col-lg-6 col-md-6">
                                                                
                                                                <input id="email" type="text" placeholder="Nhập email">
                                                            </div>  
                                                        </div>
                                                        <button type="submit">GỬI BÌNH LUẬN</button>
                                                     </form>   
                                                </div>     
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                        </div>  
                        
                        <!--product info end-->


                        <!--new product area start-->
                       
                             
                        <div class="new_product_area product_page">
                            <div class="row">
                                <div class="col-12">
                                    <div class="block_title">
                                    <h3>  Hàng hóa cùng loại</h3>
                                </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="single_p_active owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                               <a href="single-product.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham'] ?>"><img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" ></a> 
                                               
                                               <div class="product_action">
                                                   <a href="#"> <i class="fa fa-shopping-cart"></i> THÊM VÀO GIỎ HÀNG</a>
                                               </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price"><?php echo number_format($row_chitiet['giasp'],0,',',',').'đ' ?></span>
                                                <h3 class="product_title"><a href="single-product.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham'] ?>"><?php echo $row_chitiet['tensanpham'] ?></a></h3>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                   
                                                    <li><a href="single-product.php?quanly=sanpham&id=<?php echo $row_chitiet['id_sanpham'] ?>" title="Quick view">CHI TIẾT</a></li>
                                                </ul>
                                 <?php
                                      }
                                  ?>   
                                             
                                            </div>
                                        </div>
                                    </div>
           
                                </div> 
                            </div>      
                        </div> 
                        <!--new product area start-->  

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
