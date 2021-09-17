<?php 
include "db.php";
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home 1 | fc flower</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

<?php
include "header.php";

?>


    <!-- slider-area start -->
    <section class="slider-area">
        <!-- slider start -->
        <div class="slider">
            <div id="mainSlider" class="nivoSlider nevo-slider">
                <img src="img/slider/slider-1.jpg" alt="main slider" title="#htmlcaption1" />
                <img src="img/slider/slider-2.jpg" alt="main slider" title="#htmlcaption2" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap">
                            <h3 class="slider-tiile-top top-ani-1" style="font-size: 60px;"><span>Dành cho bạn</span></h3>
                            <h2 class="slider-tiile-middle middle-ani-1"><span>Special</span></h2>
                            <div class="slider-readmore">
                                <a href="contact.php">Liên hệ</a>
                            </div>
                            <div class="slider-shopping">
                                <a href="shop.php">Mua sắm thôi nào!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                <div class="slider-progress"></div>
                <div class="slider-text">
                    <div class="middle-text">
                        <div class="width-cap">
                            <h3 class="slider2-tiile-top top-ani-2"><span>Sự lựa chọn tốt nhất cho bạn</span></h3>
                            <h2 class="slider2-tiile-middle middle-ani-2"><span>Fresh Tulips</span></h2>
                            <div class="slider2-readmore">
                                <a href="contact.php">Liên hệ</a>
                            </div>
                            <div class="slider2-shop">
                                <a href="shop.php">Mua sắm thôi nào!!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end -->
    </section>
    <!-- slider-area end -->
    <!--Start Lateast Collection Top area -->
    <div class="body_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="cate.php?cate=1"><img class="banner_home1" src="img/collection-image/banner-1.jpg" alt="" /></a>
                        <div class="banner_text">
                            <h2><a href="cate.php?cate=1">Hoa Sinh Nhật</a></h2>
                        </div>
                        <div class="shop_collection">
                            <a href="cate.php?cate=1">Xem nào <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single_image">
                        <a href="cate.php?cate=2"><img class="banner_home1" src="img/collection-image/banner-2.jpg" alt="" /></a>
                        <div class="banner_text">
                            <h2><a href="cate.php?cate=2">Lan Hồ Điệp</a></h2>
                        </div>
                        <div class="shop_collection">
                            <a href="cate.php?cate=2">Xem nào <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Lateast Collection Top area -->
    <!--Start Lateast Collection bottom area -->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="cate.php?cate=3"><img class="banner_home1" src="img/collection-image/banner-11.jpg" alt="" /></a>
                        <div class="banner_text">
                            <h3><a href="cate.php?cate=3">Hoa Chúc Mừng</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="cate.php?cate=3">Xem nào <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="cate.php?cate=4"><img class="banner_home1" src="img/collection-image/banner-12.jpg" alt="" /></a>
                        <div class="banner_text">
                            <h3><a href="cate.php?cate=4">Hoa Hồng</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="cate.php?cate=4">Xem nào <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single_image">
                        <a href="shop.php"><img class="banner_home1" src="img/collection-image/banner-13.jpg" alt="" /></a>
                        <div class="banner_text">
                            <h3><a href="shop.php">Giảm giá 20% !</a></h3>
                        </div>
                        <div class="shop_collection">
                            <a href="shop.php">Xem nào <span><img src="img/arrow/bkg_newsletter.png" alt="" /></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Lateast Collection bottom area -->



<?php
// include "db.php";  
?>

    <!--Start Feature area -->
    <div class="feature_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature_text">
                        <h4>sản phẩm đặc biệt</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $rows=query("SELECT * FROM `products` ORDER BY RAND() LIMIT 12");
                while ($row=mysqli_fetch_array($rows)) {
                    $image=$row['product_image'];
                    $price=$row['product_price'];
                    $title=$row['product_title'];   
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="product_list">
                        <form action="" method="GET" name="form" enctype="multipart/form-data">
                            <div class="single_product">
                                <a href="product2.php?id=<?php echo $row['product_id']?>" target="main"><img src="img/product/<?php echo $image ?>" alt="" /></a>
                                <div class="product_details">
                                    <h2><?php echo $title ?></h2>
                                    <p><span class="regular_price">600000 VND</span> <span class="popular_price"><?php echo $price ?> VND</span></p>
                                </div>
                                <div class="product_detail">
                                    <div class="star_icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product_button">
                                        <div class="cart_details">
                                            <a href="product2.php?id=<?php echo $row['product_id'] ?>" target="blank">Add to cart</a>
                                        </div>
                                        <div class="cart_details">
                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <div class="cart_details">
                                            <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale_product">
                                    <h5>Sale</h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php  } ?>
            </div>

            



            



            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="more_feature_area">
                        <h2><a href="shop.php">Load More...</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Feature area -->










    <!--Start Testimonila area -->
    <div class="carousel_testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_list">
                        <div class="testimonial_single">
                            <a href="#">Nếu lỡ yêu thích vẻ đẹp của hoa hồng đồng thời bạn phải chịu đau đớn bởi những chiếc gai nhọn.</a>
                            <p>Haosiro</p>
                            <div class="author">
                                <img src="img/author/avatar.png" alt="" />
                            </div>
                        </div>
                        <div class="testimonial_single">
                            <a href="#">Trong cuộc đời người đàn ông sẽ có nhiều loài hoa bên cạnh nhưng chỉ duy nhất một đóa hồng.</a>
                            <p>Quanap</p>
                            <div class="author">
                                <img src="img/author/avatar.png" alt="" />
                            </div>
                        </div>
                        <div class="testimonial_single">
                            <a href="#">Hoa hồng đẹp nhưng chóng tàn cũng như tình yêu đẹp, lãng mạn cũng sớm vụt tắt.</a>
                            <p>Quangna</p>
                            <div class="author">
                                <img src="img/author/avatar.png" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Testimonila area -->
    <!--Start Blog area -->
    <div class="blog_post_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature_text">
                        <h4>Blog Của Tôi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="carousel_blog_list">
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-1.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">GỢI Ý NHỮNG MẪU HOA CẮM BÌNH ĐƠN GIẢN CÓ THỂ TỰ LÀM TẠI NHÀ</a>
                                <p>Không biết từ bao giờ, việc chiêm ngưỡng và thưởng ngoạn vẻ đẹp của hoa đã trở thành nguồn tiếp thêm động lực,..</p>
                                <h3>18-03-2021</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-2.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">Ý NGHĨA CÁC LOÀI HOA DÀNH TẶNG CHO PHÁI ĐẸP, HOA NGÀY QUỐC TẾ PHỤ NỮ</a>
                                <p>Người ta thường nói: "Đằng sau một người đàn ông thành công luôn có bóng dáng người phụ nữ"...</p>
                                <h3>20-03-2021</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-3.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">TOP NHỮNG MẪU HOA ĐẸP NHẤT CHO NGÀY QUỐC TẾ PHỤ NỮ , HOA TẶNG 8.3</a>
                                <p>Phụ nữ hiện đại vừa làm nội trợ vừa tham gia vào các hoạt động bên ngoài xã hội, vừa xây dựng gia đình....</p>
                                <h3>05-03-2021</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-4.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">HOA TẾT, HƯƠNG SẮC NGÀY XUÂN VIỆT</a>
                                <p>Ngày Tết đối với mỗi người Việt Nam có một ý nghĩa tinh thần vô cùng đặc biệt. Tết là dịp sum vầy, ngày những người con đang rời xa quê hương mưu sinh,...</p>
                                <h3>18 Aug 2015</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-3.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">5 Ý NGHĨA CỦA HOA CÚC VÀNG TRONG NGÀY TẾT TRUYỀN THỐNG VIỆT NAM</a>
                                <p>Không đặc biệt như mai đào nhưng cứ mỗi lần Tết đến xuân về, những khóm hoa cúc vàng ươm vẫn cứ âm thầm len lỏi vào không gian Tết của từng gia đình...</p>
                                <h3>18 Aug 2015</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <a href="#"><img src="img/blog-post-image/cl-1.jpg" alt="" /></a>
                            <div class="blog_details">
                                <a href="#">TOP 10 HOA TẶNG SINH NHẬT, CHÚC MỪNG KHAI TRƯƠNG , KỶ NIỆM NGÀY CƯỚI ĐẸP, GIÁ RẺ</a>
                                <p>Nếu bạn đang đắn đo suy nghĩ chọn lựa một mẫu hoa phù hợp để tặng sinh nhật, chúc mừng ngày khai trương hay kỷ niệm ngày cưới thì bài viết dưới đây chính là dành riêng cho bạn đó...</p>
                                <h3>18 Aug 2015</h3>
                                <a href="#">
                                    <div class="read_more">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End blog area -->
    <!--Start Contact info area -->
    <div class="service_info_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service_list">
                        <h2><i class="fa fa-envelope-o"></i> haoit2212@gmail.com</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service_list">
                        <h3><i class="fa fa-phone"></i>0966 899 059</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="Social_list">
                        <h2>Theo dõi: </h2>
                        <div class="social_icon my-class uk-scrollspy-init-inview uk-invisible">
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Like 6k" class="red-tooltip" href="#"><i class="fa fa-facebook"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 61k" class="red-tooltip" href="#"><i class="fa fa-twitter"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 16k" class="red-tooltip" href="#"><i class="fa fa-linkedin"></i></a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers 10k" class="red-tooltip" href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact info area -->

    <!--Start Branding area -->
    <div class="branding_area">
        <div class="container">
            <div class="row">
                <div class="carousel_branding">
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand2.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand3.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand4.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand2.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand3.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href=""><img src="img/branding-image/brand4.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_branding">
                            <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Branding area -->



<!--Start Footer area -->
<?php include "footer.php" ?>
    <!--End Footer area -->




    <!-- jquery JS -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile menu JS -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery.easing js -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <!-- knob circle js -->
    <script src="js/jquery.knob.js"></script>
    <!-- fancybox JS -->
    <script src="fancy-box/jquery.fancybox.pack.js"></script>
    <!-- price slider JS  -->
    <script src="js/price-slider.js"></script>
    <!-- nivo slider JS -->
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <!-- wow JS -->
    <script src="js/wow.js"></script>
    <!-- nivo-plugin JS -->
    <script src="js/nivo-plugin.js"></script>
    <!-- scrollUp JS -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- carousel JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
</body>

</html>

