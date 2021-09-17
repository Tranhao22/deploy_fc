<?php 

$cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[];
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<marquee direction="left" style="background:aliceblue">SHOP xin thông báo: Nhân dịp chào hè 2021, nhằm tri ân khách hàng luôn tin tưởng mua hoa của shop HQQ, 100% khách hàng khi nhập code <span>HQQB<span> sẽ được giảm 5% giá trị đơn hàng. Chúc quý khách có một mua hè sôi động cùng với HQQ_SHOP!</marquee>
    <!--Start Header Top area -->
		<div class="header_area_top"> 
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<!--Start Search area -->
					
						<form action="search.php" name="myForm">
							<div class="search_box">
								<input name="Name" id="itp" class="input_text" type="text" value="Search"/>
								<button type="submit" class="btn-search">
									<span><i class="fa fa-search"></i></span>
								</button>
							</div>
						</form> 
						<!--End Search area -->
					</div>
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Logo area -->
						<div class="logo"> 
							<a href="index.php">
								<img src="img/logo/logo3.png" alt="" />
							</a>
						</div> 
						<!--End Logo area -->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<!--Start Header Right Cart area -->
						<div class="account_card_area"> 
							<ul id="account_nav">
								<li><a href="my-account.php"><i class="fa fa-key"></i>Tài khoản</a>
									<!-- <div class="account_menu_list">
										<div class="account_single_item">
											<h2>Currency</h2>
											<ul id="account_single_nav_1">
												<li><a href="#">Euro</a></li>
												<li><a href="#">US Dollor</a></li>
											</ul>
										</div>
										<div class="account_single_item">
											<h2>Language</h2>
											<ul id="account_single_nav_2">
												<li><a href="#">English</a></li>
												<li><a href="#">France</a></li>
												<li><a href="#">Germany</a></li>
											</ul>
										</div>
										<div class="account_single_item">
											<h2>Setting</h2>
											<ul id="account_single_nav_3">
												<li><a href="my-account.php">My Account</a></li>
												<li><a href="">My Wishlist</a></li>
												<li><a href="cart.php">My Cart</a></li>
												<li><a href="checkout.php">Checkout</a></li>
												<li><a href="#">Testimonial</a></li>
												<li><a href="single-blog.php">Blog</a></li>
												<li><a href="#">Log In</a></li>
											</ul>
										</div>
									</div> -->
								</li>
								
								<li><a href="view2.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng<span class="cart_zero"><?php echo count($cart);?></span></a>
									<!-- <div class="cart_down_area">
										<div class="cart_single">
											<a href="#"><img src="img/cart/cart-1.jpg" alt="" /></a>
											<h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
											<p>1 x $11.00</p>
										</div>
										<div class="cart_single">
											<a href="#"><img src="img/cart/cart-2.jpg" alt="" /></a>
											<h2><a href="#">Pellentesque hendrerit</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
											<p>1 x $22.00</p>
										</div>
										<div class="cart_shoptings">
											<a href="checkout.php">Checkout</a>
										</div>
									</div> -->


								</li>
							</ul>
						</div> 
						<!--End Header Right Cart area -->
					</div>
				</div>
			</div>
		</div> 
		<!--End Header Top area -->


		<!--Start Main Menu area -->
		<div class="header_botttom_area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--Start desktop menu area -->
						<div class="main_menu">
							<ul id="nav_menu" class="active_cl">
								<li><a href="index.php"><span class="Home">Trang chủ</span></a>
									<!-- <div class="home_mega_menu">
										<a href="index-2.php">Home 2</a>
										<a href="index-3.php">Home 3</a>
									</div> -->
								</li>
								<li><a href="shop.php"><span class="Clothings">Cửa hàng</span></a>
									<div class="home_mega_menu">
										<div class="single_megamenu">
											<a href="cate.php?cate=1"><span>Hoa Sinh Nhật</span></a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=2">Lan Hồ Điệp</a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=3">Hoa Chúc Mừng</a>
										</div>
										<div class="single_megamenu">
											<a href="cate.php?cate=4">Hoa Hồng</a>
										</div>
									</div>
								</li>

								<!-- <li><a href="shop.php"><span class="Lookbook">Lookbook</span></a>
									<div class="look_mega_menu">
										<div class="look_single">
											<h3>Rose</h3>
											<div class="items_list_lk">
												<a href="shop.php"><i class="fa fa-angle-right"></i>Yellow Rose</a>
												<a href="shop.php"><i class="fa fa-angle-right"></i>White Rose</a>
											</div>
										</div>
										<div class="look_single">
											<h3>Orchids</h3>
											<div class="items_list_lk">
												<a href="shop.php"><i class="fa fa-angle-right"></i>Orchids Samurai</a>
												<a href="shop.php"><i class="fa fa-angle-right"></i>Orchids Phalaenopsis</a>
											</div>
										</div>
										<div class="look_single">
											<h3>Chrysanthemum</h3>
											<div class="items_list_lk">
												<a href="shop.php"><i class="fa fa-angle-right"></i>Red Chrysanthemum</a>
												<a href="shop.php"><i class="fa fa-angle-right"></i> Yellow Chrysanthemum</a>
											</div>
										</div>
										<div class="look_menu_img">
											<a href="#"><img src="img/banner/banner-1.jpg" alt="" /></a>
											<a href="#"><img src="img/banner/banner-2.jpg" alt="" /></a>
										</div>
									</div>
								</li> -->


								<li><a href="single-blog.php"><span class="Footwear">Blog</span></a>
									<div class="home_mega_menu">
										<a href="single-blog.php">Blog của tôi</a>
									</div>
								</li>

								<li><a href="contact.php"><span class="Sales">Giới thiêu</span></a>
								</li>

								<li><a href="about-us.php"><span class="Accessaries">Về chúng tôi</span></a>
									<!-- <div class="home_mega_menu">
										<a href="about-us.php">Về chúng tôi</a>
										<a href="contact.php">Giới thiêu</a>
										<a href="cart.php">Giỏ hàng</a>
										<a href="product.php">Sản phẩm</a>
										<a href="checkout.php">Thanh toán</a>
										<a href="my-account.php">Đăng nhập</a>
										<a href="wishlist.php">Wishlist</a>
										<a href="404.php">404 page</a>
									</div> -->
								</li>
							</ul>
						</div>
						<!--End desktop menu area -->
					</div>
				</div>
			</div>


			<!--start Mobile Menu area -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.php">Trang chủ</a>
											<!-- <ul>
												<li><a href="index-2.php">Home 2</a></li>
												<li><a href="index-3.php">Home 3</a></li>
											</ul> -->
										</li>
										<li><a href="shop.php">Cửa hàng</a>
											<!-- <ul>										
												<li><a href="shop.php">Learning</a>
													<ul>										
														<li><a href="shop.php">Carnation</a></li>
														<li><a href="shop.php">Daisy</a></li>
														<li><a href="shop.php">Rose</a></li>
														<li><a href="shop.php">Gladiolus</a></li>
													</ul>
												</li>
												<li><a href="shop.php">Lighting</a>
													<ul>										
														<li><a href="shop.php">Carnation</a></li>
														<li><a href="shop.php">Daisy</a></li>
														<li><a href="shop.php">Rose</a></li>
														<li><a href="shop.php">Gladiolus</a></li>
													</ul>
												</li>
												<li><a href="shop.php">Living Room</a></li>
												<li><a href="shop.php">Lamp</a></li>
											</ul> -->
										</li>

										<!-- <li><a href="shop.php">Lookbook</a>
											<ul>
												<li><a href="shop.php">Yellow Rose</a></li>
												<li><a href="shop.php">White Ros</a></li>
											</ul>
										</li> -->
										
										<li><a href="blog.php">Blog</a>
											<ul>
												<li><a href="single-blog.php">Blog của tôi</a></li>
											</ul>
										</li>
										<li><a href="shop.php">Shop</a>
											<ul>										
												<li><a href="cart.php">Giỏ hàng</a></li>
												<li><a href="product.php">Sản phẩm</a></li>
												<li><a href="checkout.php">Thanh toán</a></li>
												<li><a href="my-account.php">Tài khoản</a></li>
											</ul>
										</li>
										<li><a href="about-us.php">Trang khác</a>
											<ul>										
												<li><a href="about-us.php">About Us</a></li>
												<li><a href="contact.php">Contact</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!--End Mobile Menu area -->
		</div>
		<!--End Main Menu area -->
</body>
</php>