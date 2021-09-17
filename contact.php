<?php
include "db.php";
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['nguoi_nhan']))
{
	$nguoi_nhan=$_POST['nguoi_nhan'];
	$CC=$_POST['CC'];
	//$BCC=$_POST['BCC'];
	$tieu_de=$_POST['tieu_de'];
	$noi_dung=$_POST['noi_dung'];

	require "PHPMailer/src/PHPMailer.php";
	require "PHPMailer/src/Exception.php";
	require "PHPMailer/src/SMTP.php";

	//tạo mới đối tượng mailer và thiết lập dùng SMTP
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";

	//tạo kết nối
	$mail->SMTPDebug  = 0;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = "haoit2212@gmail.com";
	$mail->Password   = "haoit221220@";

	//tạo nội dung, tiêu đề và danh sách gửi email
	$mail->isHTML(True);
	$mail->addAddress($nguoi_nhan,"Hao ");
	$mail->setFrom("OK123@gmail.com","Hao. FAKE");
	$mail->AddReplyTo("haoit2212@gmail.com","hAo real");
	$mail->AddCC($CC."");//gửi nhận thấy email người đc gửi cùng
	//$mail->AddBCC($BCC,"");//gửi nhận  ko thấy email người đc gửi cùng

	$mail->Subject=$tieu_de;

	$mail->MsgHTML($noi_dung);

	//gửi email
	if(!$mail->Send()){
		$msg="không gửi được";
		
	}else{
		$msg= "Đã gửi mail thành công!";
	}


}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giới thiệu</title>
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
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main  -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style  -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<?php include "header.php";?>


<div id="msg"><?php if(isset($msg))
							echo $msg; ?></div>



    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single blog_top_area">
                        <ul id="breadcrumbs">
                            <li><a href="index.php"><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><span>Ι</span></li>
                            <li>Liên hệ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Start google map area -->
    <div class="google_map_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="googleMap" style="width:100%;height:433px;"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End google map area -->
    <!--Start company details area -->
    <div class="company_contact_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="get_touch">
                        <h2>Hãy gửi phản hồi cho chúng tôi</h2>
                        <p>Hãy để chúng tôi đồng hành cùng bạn trên chặng đường sắp tới!! Cảm ơn bạn đã mua hàng tại trang web của chúng tôi!!!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="contact_us_info">
                        <form action="" method="POST">
                            <table>
                                <input type="text" placeholder="CC" name="CC">
                                <input type="text" placeholder="Email *" name="nguoi_nhan">
                                <input type="text" placeholder="Tiêu đề" name="tieu_de">
                                <textarea placeholder="Nội dung *" rows="10" cols="30" name="noi_dung"></textarea>
                                <div class="controls">
                                    <input type="submit" class="btn btn-large btn-primary submit" value="Gửi">
                                </div>
                            </table>
                        </form>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="company_right_area">
                        <h6>Thông tin cửa hàng</h6>
                        <div class="contact_addon_content">
                            <p><span><i class="fa fa-map-marker"></i></span>234 Hoàng Quốc Việt, Mai Dịch, Cầu Giấy, Hà Nội</p>
                            <p><span><i class="fa fa-envelope"></i></span> hqq@shop.com</p>
                            <p><span><i class="fa fa-phone"></i></span> 0966 899 059</p>
                        </div>
                    </div>
                    <div class="company_right_hour">
                        <h6>Thời gian hoạt động</h6>
                        <p>Thứ 2 - Thứ 7 : 08:00 đến 22:00</p><p>Chủ nhật : 09:00 đến 22:00</p>
                        <div class="single_icons_contact">
                            <ul id="social_contact_icon">
                                <li><a href="#" class="black-tooltip s-1" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Facebook"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#" class="black-tooltip s-2" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="black-tooltip s-3" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="black-tooltip s-4" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="black-tooltip s-5" title="" data-placement="top" data-toggle="tooltip" data-original-title="Follow us Behance"><i class="fa fa-behance"></i></a></li>
                            </ul>
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
    <!-- google map API JS  -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.81033, 90.41252)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map.png',
                map: map
            });

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- plugins JS  -->
    <script src="js/plugins.js"></script>
    <!-- main JS  -->
    <script src="js/main.js"></script>
</body>

</html>