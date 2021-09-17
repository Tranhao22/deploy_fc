
<?php
session_start();
?>

<!doctype html>
    <html class="no-js" lang="en">

    <head>
    <!-- Basic page needs
        ============================================ -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Search | fc flower</title>
        <meta name="description" content="">
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- carousel CSS  -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- carousel Theme CSS  -->
        <link rel="stylesheet" href="css/owl.my_theme.css">
        <!-- carousel transitions CSS  -->
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- nivo slider slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Price jquery-ui  -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <!-- fancy-box theme -->
        <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
        <!-- normalizer  -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- main  -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Mobile menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- style  -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS  -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <?php include "db.php" ?>
        <!--Start Header Top area -->
        <?php include "header.php"; ?>
        <!--End Main Menu area -->


        <!--Start breadcrumbs area -->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-single">
                            <ul id="breadcrumbs">
                                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                <li><span>Ι</span></li>
                                <li>Search</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End breadcrumbs area -->


        <!--Start clothing product area -->
        <div class="clothing_product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="popular_tag_area">
                            <div class="popular_items">
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="popular_tag_area popular_tag_response">
                                    <div class="popular_items">
                                        <h2>Sản phẩm so sáng</h2>
                                        <div class="conpany_product_details">
                                            <p>Không có sản phẩm so sánh.</p>
                                            <a href="#"><img src="img/banner/banner_left.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="popular_tag_area">
                                    <div class="popular_items">
                                        <h2>Highlights</h2>
                                    </div>
                                </div>
                                <div class="clothing_carousel_list">
                                    <div class="single_clothing_product">



                                        <?php
                                        $rws=query("SELECT * FROM `products` WHERE product_id<5");
                                        while ($rw=mysqli_fetch_array($rws)) {
                                            $im=$rw['product_image'];
                                            $pric=$rw['product_price'];
                                            $tit=$rw['product_title'];
                                            ?>
                                            <div class="clothing_item">
                                                <img src="img/product/<?php echo $im ?>" alt="" />
                                                <div class="product_clothing_details">
                                                    <h2><a href="#"><?php echo $tit ?></a></h2>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <p><?php echo $pric ?></p>
                                                </div>
                                            </div>  
                                        <?php } ?>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="catagory_banner">
                                    <img src="img/banner/category.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        

                     <div class="tab-content tab_content_style">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <?php
                                $search = addslashes($_GET['Name']);
                                if(empty($search)){
                                    echo "123";
                                 }
                                else
                                {
                                echo "Kết quả với từ khóa: $search";
                                $rows=query("SELECT * FROM `products` where `product_title` like  '%$search%' or `product_keywords` like  '%$search%'");
                                while ($row=mysqli_fetch_array($rows)) {
                                    ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">

                                                <?php  
                                                $image=$row['product_image'];
                                                $price=$row['product_price'];
                                                $title=$row['product_title'];
                                                $id=$row['product_id'];
                                                
                                                ?>
                                                <a href="product2.php?id=<?php echo $id; ?>" target="main"><img src="img/product/<?php echo $image ?>" alt="" /></a>
                                                
                                                <div class="product_details">
                                                    <h2><?php echo $title ?></h2>
                                                    <p><span class="regular_price">250000 VND</span> <span class="popular_price"><?php echo $price ?>VND</span></p>
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
                                                            <a href="cart2.php?id=<?php echo $id; ?>" target="blank">Add to cart</a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php 
                                }

                                }
                            ?>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>


<div class="branding_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="carousel_branding">
                    <div class="single_branding">
                        <img src="img/branding-image/brand1.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand3.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand4.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand1.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand3.jpg" alt="" />
                    </div>
                    <div class="single_branding">
                        <img src="img/branding-image/brand2.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Branding area -->

<!--Start Footer area -->
<?php include "footer.php";?>
<!--End footer area -->

<!-- jquery JS  -->
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
<!-- carousel JS  -->
<script src="js/owl.carousel.min.js"></script>
<!-- plugins JS  -->
<script src="js/plugins.js"></script>
<!-- main JS  -->
<script src="js/main.js"></script>
</body>
</html>