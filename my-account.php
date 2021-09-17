<?php
session_start();

// $sql="select *from admin_info where username='$username' and password='$password'";
// query($sql);

include "db.php";

if (isset($_POST['email']))
{
	$email=$_POST['email'];
} else
$email='';

if (isset($_POST['password']))
{
	$password=$_POST['password'];
} else
$password='';
$rs=query("select * from user_info where email='$email' and password='$password'");
$rows=query("select * from admin_info where admin_email='$email' and admin_password='$password'");
if ($row=mysqli_fetch_array($rows)||$r=mysqli_fetch_array($rs)){
    header("location:admin/index.php");
}else{
    
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tài khoản | fc flower</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon============================================ -->
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
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--Start Header Top area -->
<?php include "header.php";?>
    <!--End Main Menu area -->
    <!--Start Register & login area -->
    <div class="my_account_page_area">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="create_account">
                        <!-- <h2>Đăng nhập và tạo tài khoản người dùng</h2> -->
                    </div>
                </div>
            </div>
            <div class="row ml">
            
            <style class="">
            .ml{
            background:aliceblue;
            }
            </style>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="new_customer">
                    <img src="img/account/ac.jpg" alt="" class="" style="width:100%">
                        <!-- <h3>Tài khoản mới</h3>

                        <ul class="register_form">
                            <div class="form-group ">     
                                <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="email" name="email"  placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="password" name="res_password" id="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="text" name="address1" id="address1" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input class="input form-control input-borders" type="text" name="address2" id="address2" placeholder="City">
                            </div>
                        </ul> -->
                        
                        
                    <!-- </div>
                    <div class="create_button_area">
                        <button type="submit" class="create_button">
								Tạo tài khoản
							</button> -->
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <form action="my-account.php" method="POST">
                    <div class="new_customer">
                        <h3>Đăng nhập</h3>
                        <p>Nếu bạn đã có tài khoản, vui lòng đăng nhập.</p>
                        <ul class="register_form">
                            <li>Email Address<span>*</span></li>
                            <li>
                                <div class="email_address">
                                    <input type="text" class="email_test" name="email" required/>
                                </div>
                            </li>
                            <li>Password<span>*</span></li>
                            <li>
                                <div class="email_address">
                                    <input type="password" class="password" name="password" required/>
                                </div>
                            </li>
                            <li>
                                <h2><span>*</span>Bắt buộc</h2>
                            </li>
                        </ul>
                    </div>
                    <div class="create_button_area">
                        <a href="">Quên mật khẩu?</a>
                        <button type="submit" class="create_button">
								Đăng nhập
							</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Register & login area -->
    <!--Start Branding area -->
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
    <?php include "footer.php"?>
    <!--End Footer area -->

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