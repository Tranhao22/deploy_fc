<?php  ob_start();
require_once "db.php"; 
session_start();
if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
else
{
    $action="";
}

if (isset($_POST['first_name']))
{
	$first_name =$_POST['first_name'];
} else
$first_name ='';

if (isset($_POST['last_name']))
{
	$last_name =$_POST['last_name'];
} else
$last_name ='';

if (isset($_POST['email']))
{
	$email =$_POST['email'];
} else
$email ='';

if (isset($_POST['address1']))
{
	$address1 =$_POST['address1'];
} else
$address1 ='';

if (isset($_POST['address2']))
{
	$address2 =$_POST['address2'];
} else
$address2 ='';

if (isset($_POST['phone']))
{
	$phone =$_POST['phone'];
} else
$phone ='';

if (isset($_POST['description']))
{
	$description =$_POST['description'];
} else
$description ='';
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
		<!-- Basic page needs
        ============================================ --> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Chec| fc flower</title>
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
        
		<!--Start Header Top area -->
		<?php include "header.php"; ?>
		<!--End Main Menu area -->
		<div class="checkout_accrodion_area">
			<div class="container">
				<div class="row">
                <form action="check.php?action=ins" method="POST">
                    <div class="col-md-7 col-lg-7 col-xl-6">
                        <!-- <form action="" method="post"> -->
                            <div class="mb-3">
                                <label for="" class="form-label">Họ</label>
                                <input type="text" class="form-control" name="first_name" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tên</label>
                                <input type="text" class="form-control" name="last_name" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="" required>
                            </div>
                           <div class="mb-3">
                                <label for="" class="form-label">Thành phố (Tỉnh thành)</label>
                                <input type="text" class="form-control" name="address1" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control"  name="address2" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control"  name="phone" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Ghi chú</label>
                                <textarea class="form-control" rows="3" name="description" value="" ></textarea>
                            </div>
                            
                            <!-- <button type="submit" class="btn btn-primary">Lưu</button> -->
                        <!-- </form> -->
                    </div>
                    <div class="right col-md-5 col-lg-5 col-xl-6">
                        <div class="t">
                            <style>
                            .right {
                                padding-left: 50px;
                            }
                            
                            td {
                                border-bottom: 1px solid black;
                                font-size: 16px;
                                padding: 8px;
                                display: space-between;
                            }
                            
                            .t {
                                box-shadow: 0 0 4px 0.1px #0174DF;
                                padding: 1em;
                            }
                            
                            table {
                                margin: auto;
                            }
                            
                            .hai {
                                text-align: right;
                            }
                            </style>
                        
                        
                            <table style="width:90%">
                                <tr>
                                    <td><b>Sản phẩm</b></td>
                                    <td class="hai"><b>Tổng</b></td>
                                </tr>
                                <?php
                                $sub_total=0;
                                foreach ($cart as $key => $value):
                                $sub_total+=($value['qty']*$value['price']);
                                
                                ?>
                                <tr>
                                    <?php
                                    $x=$value['id'];
                                    $rows=query("SELECT * FROM `products` WHERE `product_id`=$x");
                                    while ($row=mysqli_fetch_array($rows)) {
                                        $name=$row['product_title'];
                                    }
                                    ?>
                                    <td><?php echo $name;?> * <?php echo $value['qty'];?></td>
                                    <td class="hai"><?php echo number_format($value['qty']*$value['price']);;?></td>
                                </tr>
                                <?php endforeach ?>
                                
                                <tr>
                                    <td>Tạm tính</td>
                                    <td class="hai"><?php echo number_format($sub_total);?></td>
                                </tr>

                                <tr>
                                    <td>Tổng</td>
                                    <td class="hai"><?php echo number_format($sub_total);?></td>
                                </tr>
                                
                            </table>
                            <br><b>Trả tiền mặt khi nhận hàng</b><br><br>
                            <p>Trả tiền mặt khi giao hàng</p>
                            <button type="submit" class="btn btn-primary">Mua hàng</button>
                        <!-- </form> -->

                    </div>
                    </div>
                </form>
<?php


switch ($action){
	case 'ins': 
        {
        $today = date('Y-m-d H:i:s');
        $sql="INSERT INTO `orders`(`first_name`, `last_name`, `email`, `address1`, `address2`, `mobile`, `total`, `ship`, `date`, `description`) VALUES ('$first_name','$last_name','$email','$address1','$address2','$phone','$sub_total','30000','$today','$description')";
        Query($sql);
        $rows=query("SELECT max(`id`)as id FROM `orders`");
        $row=mysqli_fetch_array($rows);
        $oid=$row['id'];

        foreach ($cart as $key => $value):
        $id=$value['id'];
        $price=$value['price'];
        $qty=$value['qty'];
        $sub=$value['qty']*$value['price'];
        $sql1="INSERT INTO `orders_detail`(`orders_id`, `product`, `price`, `qty`, `thanhtien`) VALUES ($oid,$id,$price,$qty,$sub)";
        Query($sql1);
        endforeach;
        session_destroy();
        header("Location: index.php");
	    break;
        
    }

}
?>
				</div>
			</div>
		</div>
        <!--Start branding area -->
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
		<!--End branding area -->

		<!--Start footer area -->
		<?php include "footer.php";?>
		<!--End footer area -->
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
<?php ob_end_flush(); ?>