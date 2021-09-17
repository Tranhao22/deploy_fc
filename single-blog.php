<?php include "db.php"; 
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic page needs
        ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog</title>
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
    <!-- modernizr JS ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--Start Header Top area -->
    <?php include "header.php";?>
    <!--End Main Menu area -->
    <!--Start single blog area -->
    <div class="blog_post_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single blog_top_area">
                        <ul id="breadcrumbs">
                            <li><a href=""><i class="fa fa-home"></i>Trang chủ</a></li>
                            <li><span>Ι</span></li>
                            <li>Blog </li>
                            <li><span>Ι</span></li>
                            <li>Blog của tôi</li>
                        </ul>
                    </div>
                    <div class="blog_list_area">
                        <div class="single_blog_area">
                            <img src="img/slider-image/1.jpg" alt="" />
                        </div>
                        <div class="single_blog_area">
                            <img src="img/slider-image/2.jpg" alt="" />
                        </div>
                        <div class="single_blog_area">
                            <img src="img/slider-image/3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="blog_details_area">
                        <i class="fa fa-picture-o"></i>
                        <div class="blog_details_list">
                            <ul class="blog_author">
                                <li><i class="fa fa-folder-open-o"></i> <a href="">blog</a></li>
                                <li><i class="fa fa-user"></i> Thần điêu đại bịp</li>
                                <li><i class="fa fa-eye"></i> Lượt truy cập: 256</li>
                                <li>
                                    <div class="star_blog">
                                        Đánh giá:
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog_info_details">
                        <style type="text/css" media="screen">
                            .blog_info_details p{
                                text-align: justify;
                            }
                        </style>
                            <h2><a class="blog_info_heading" href="#">Sống như những loài hoa dại</a></h2>
                            <p class="blog_paragrap_style">Có những ngày mưa rả rích ướt nhem nhép suốt khiến tôi khó chịu. Cũng không hẳn là một cơn mưa dông vội vã đến, xối ầm ầm xuống như muốn vùi dập những ngôi nhà nhỏ bé nơi làng quê nghèo ấy. Nhưng cơn mưa ấy vội đến những vội đi, nóng nảy như một bà già cáu bẳn vội vã.</p>
                            <p class="blog_paragrap_style">Còn cơn mưa này, rả rích suốt cả đêm ngày. Những hạt mưa rơi chầm chậm, thong thả, đều đều và có phần dịu dàng. Và hẳn nhiên những giọt mưa ấy chỉ đủ để làm ướt con đường, ướt vườn cây của mẹ, và ướt vài khóm hoa dại bên kia đường chứ chẳng thể nào vùi dập nỗi một bông hoa bé tí vẫn đang cố nở kia.</p>
                            <p class="blog_paragrap_style">Qua ô cửa sổ, tôi đưa mắt nhìn sang bên kia đường, nơi có những bông hoa dại đang cố vươn mình đón lấy những hạt mua li ti như giành lấy sự sống. Những giọt mua nhỏ len lỏi qua được khung cửa, hất vào mặt man mát khiến tôi bừng tỉnh. Những ngày qua, tôi tự nhốt mình trong ngôi nhà này, đơn độc và lẻ loi đến độ chẳng thể nào nhớ được bông hoa dại trước nhà tôi có màu gì nữa. Còn giờ đây, cái màu vàng rực rỡ tưởng như bị cơn mưa kia vùi dập thì lại đang len mình mà vươn lên với cái thân gầy guộc nhỏ bé.</p>
                            <p class="blog_paragrap_style">Tôi mệt mỏi. Tôi chán nản với bộn bề của cuộc sống này. Sinh ra ở một vùng quê nghèo của miền Trung đầy nắng và gió. Những ngày tháng 6 gió Lào thổi khô cả vườn cây, tiếng lá khô xào xạc trong tiếng gió đến nghèo nàn. Những tưởng rằng nghèo như chính nơi nó sinh ra vậy. Cơn gió thổi rát mặt khiến những làn da càng thêm ngăm ngăm màu nắng. Từng đám cỏ khô ven đường vàng vọt nổi lên một vài chiếc lá xanh xanh của đám hoa dại. Đến những ngày mưa bão, mưa như trút nước, như muốn dùng cái sức nặng ấy ập đổ xuống những ngôi nhà nhỏ mong manh ấy. Trong dòng nước chảy xiết, chỉ thấy loi ngoi những bông hoa dại nhuốm màu vàng úa tàn.</p>
                            <p class="blog_paragrap_style">Ngước mắt lên nhìn trời, mà than, mà trách, mà nghĩ về cuộc sống này. Tôi ao ước được bước chân đi ra khỏi mảnh đất nghèo nàn gian khổ ấy, đi kiếm tìm một cuộc sống mới. Và cuộc sống ấy hẳn rằng sẽ chẳng có những ngày mưa mấy chị em ngổi co ro nhìn những giọt nước nhỏ long tong xuống nền nhà đất nhão. Mùi bùn nồng nồng ám ảnh tôi cả trong giấc mơ muộn màng.</p>
                            <p class="blog_paragrap_style">Và thế, giờ đây tôi đã có cuộc sống đó. Bon chen nơi thành phố tấp nập ồn ào này chỉ để kiếm tìm một ngày bình yên? Đôi khi tôi tự hỏi có chăng những ngày bình yên thật sự.</p>
                            <p class="blog_paragrap_style">Mỗi sáng sớm vội vàng lao ra đường, hòa mình vào dòng người xa lạ ấy, cũng chẳng có nổi một nụ cười. Nhìn khuôn mặt mệt mỏi trong gương, thật chẳng thể nhận ra mình giữa bộn bề cuộc sống ấy. Những lo toan cứ như guồng xoay cuốn con người ta vào chẳng có chút nào ngơi nghỉ.</p>
                            <p class="blog_paragrap_style">Chiều. Báo hiệu bởi tiếng còi xe bắt đầu vội vã hơn. Người người đổ xuống đường, lao đi như chẳng có chút gì níu giữ. Chỉ mong muốn được về nhà sớm hơn một chút. Được thảnh thơi hơn một chút. Được gặp con, gặp người yêu nhanh hơn một chút. Thì ra người ta ai ai cũng có người để chờ đợi, để yêu thương. Có những hạnh phúc nhỏ bé thế đấy, ngày ngày có một công việc để làm, có một người để yêu thương, có một mái nhà bình yên để quay về. Còn tôi, vẫn chỉ có một mình chìm ngập trong căn phòng nhỏ mang tên cô đơn ấy. Nó mãi mãi chẳng thể trở thành nhà, bởi vì ở đó không có hơi ấm của người tôi thương. Mệt mỏi lê chân bước đi những bước chậm, thật chậm để thấy mình bình yên hơn chút ít.</p>
                            <p class="blog_paragrap_style">Đêm đến, khi bóng tối bao trùm lấy thành phố cũng là lúc tôi sống thật với chính mình nhất. Nỗi nhớ ùa về, rõ rệt như có thể đưa tay ra mà chạm được vào nó vậy. Nỗi nhớ về một miền quê nghèo khó nhưng thanh bình. Nhớ về những ngày gian khổ mà ấm áp đầy tình thương yêu. Nhớ ngôi nhà đầy hơi ấm của mẹ, của người thương yêu hơn bao giờ hết. Những giọt nước mắt rơi vội vã khiến nỗi nhớ càng thêm u uất. Nhưng ngoài kia chỉ còn lại bóng đêm mờ mịt. Xa xa đâu đó những ánh đèn vàng chiếu sáng một góc thành phố mờ ảo.</p>
                            <p class="blog_paragrap_style">Tôi lại bất chợt nhớ về những bông hoa dại bên đường trước cửa nhà. Có những ngày mưa, ngày nắng như thế, nhưng những bông hoa chưa bao giờ biến mất. Vẫn luôn kiên cường vươn lên giành lấy sự sống trong muôn vàn gian khó ấy. Những cánh hoa nho nhỏ màu vàng không hề úa tàn như cái màu của bất lực, nó rực rỡ, ánh lên niềm vui, sự sống và cả niềm hy vọng chưa hề nguôi ngoai.</p>
                            <p class="blog_paragrap_style">Tôi là gì ở chốn phồn hoa đô thị này? Có phải cũng là một cành hoa dại bên đường, cứ luôn cố mình mà vươn lên, mà giành giật lấy sự sống nơi đầy bon chen, nơi vội vã. Cũng có những mệt mỏi, những nỗi buồn vui trong cuộc sống ấy, như những ngày mưa nắng dãi dầu của quê tôi, nhưng cành hoa ấy chưa bao giờ gục ngã. Vẫn sống, vẫn rực rỡ, vẫn tươi xanh.</p>
                            <blockquote>
                                <p>Bản năng cho ta biết cách để vươn mình đón những điều tươi mới của cuộc sống. Trong những khó khăn gian khổ kia vẫn luôn có niềm hy vọng. “Sự sống bắt đầu từ trong gian khổ”, bởi thế hãy cứ sống như những loài hoa dại ấy, trong sóng gió của cuộc đời này, cứ vươn mình lên mà đón lấy niềm tin.</p>
                            </blockquote>
                            <p class="blog_paragrap_style">...Ngoài trời vẫn mưa, những hạt mưa vẫn nhẹ nhàng chậm rãi suốt đêm ngày không ngớt. Tôi mở tung cánh cửa sổ nhỏ, để những hạt mưa tạt vào bàn tay mát lạnh. Bên kia đường là những bông hoa dại rực rỡ màu vàng rung rung theo từng hạt mưa. Phía xa ấy, tôi thấy mặt trời đã lên!</p>
                            <p style="color:black;font-size:17px;">© Thần điêu đại bịp - blogradio</p>
                        </div>
                    </div>
                    <div class="blog_social_icon">
                        <img src="img/social/shareicon.png" alt="" />
                    </div>
                    <div class="blog_add_comment_area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comment_text">
                                    <h2>Bình luận</h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="comment_name">
                                    <input type="text" placeholder="Tên">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="comment_email">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment_title">
                                    <input type="text" placeholder="Nội dung">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="comment_textarea">
                                    <textarea cols="65" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="chapcha">
                                    <img src="img/social/capcha.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="chapcha_type">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send_button">
                                    <input type="submit" value="Gửi">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="blog_right_sidebar">
                        <h2 class="sp_module_title"><span>Bài viết</span></h2>
                        <p style="font-size:15px;"> <b> Sống như những loài hoa dại</b></p>
                        <p style="font-size:14px">Thần điêu đại bịp</p>
                        <div class="sub_area" >
                        </div>
                        <div class="latest_posts">
                            <h3 class="sp_module_title sp_module_title_rv"><span>Bài viết mới nhất</span></h3>
                            <div class="single_l_post">
                                <a href="#">Sống như những đóa hoa</a>
                                <p>23/05/2021</p>
                            </div>
                            <div class="single_l_post">
                                <a href="single-blog.php">Sống như những loài hoa dại</a>
                                <p>23/05/2021</p>
                            </div>
                            <div class="single_l_post">
                                <a href="#">Hoa, tôi và em</a>
                                <p>02/06/2021</p>
                            </div>
                        </div>
                        <div class="add_r_sidebar">
                            <p class="banner_block">
                                <a href="#"><img alt="" src="img/banner/3.jpg"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End single blog area -->
    <!--Start Footer Banner area -->
    <div class="blog_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="single_banner">
                        <div class="banner_home_inner">
                            <a href="#">
                                <img alt="" src="img/banner/2.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Footer Banner area -->

    <!--Start Footer area -->
    <?php include "footer.php"; ?>
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