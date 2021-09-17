<?php
session_start();
include("../db.php");

error_reporting(0);

include "sidenav.php";
include "topheader.php";



if(isset($_GET['action']))
{
	$action=$_GET['action'];
}
else
{
	$action="";
}
if(!empty($_POST['time1']))
{
	$time1=$_POST['time1'];
}
if(!empty($_POST['time2']))
{
	$time2=$_POST['time2'];
}
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Thống kê</h4>
              </div>
              <div class="card-body">
                    <div class="table-responsive ps">

                    
                    <!-- <form>
                    <tr><td>Ngày tháng : </td><td><input type="date"></td></tr>
                    <tr><td>Top 3 khách hàng có giá trị đơn hàng lớn nhất: </td><td><input type="checkbox" class=""></td></tr>
                    <tr><td>Top 5 sản phẩm có lượng tiêu thu cao nhất : </td><td><input type="checkbox" class=""></td></tr>
                        <button type="submit" class="">Lọc</button>
                    </form> -->
                   <form action="" method="get" class=""></form>
                        <button class="btn btn_default" ><a href="thongke.php?action=top3" class=""> Top 3 khách hàng có đơn hàng lớn nhất</a></button>
                        <button class="btn btn_default" ><a href="thongke.php?action=top5" class=""> Top 5 sản phẩm có lượng tiêu thu cao nhất</a></button>
                        <button class="btn btn_default" ><a href="thongke.php?action=doanhthu" class="">Doanh thu theo thời gian</a></button>
                    </form>
                    <?php
                    switch($action){
                        case 'top3':
                    ?>
                    <form action="" method="get" class="mm">
                        <table>
                            <?php
                            $rows=query("SELECT `first_name`as x,`last_name`,`total`as y FROM `orders` ORDER BY `total` DESC LIMIT 3");
					        while ($row=mysqli_fetch_array($rows)) {
                            $name=$row['x'];
                            $p=$row['last_name'];
                            $tt=$row['y'];
                            
                            ?>
                            <tr class="">
                                <td>Tên khách hàng</td><td><input type="text" class="form-control" value="<?php echo "$name $p" ?>"></td>
                            </tr>
                            <tr class="">
                                <td>Tổng giá trị</td><td><input type="text" class="form-control" value="<?php echo number_format($tt); ?> VND"></td>
                            </tr>
                            <?php
                                
                            }
                            ?>
                        </table>
                    </form>
                    <?php 
                    break;
                    case 'top5':
                        ?>
                    <form action="" method="get" class="mm">
                        <table>
                            <?php
                            $rows=query("SELECT `product`as x,`qty`as y FROM `orders_detail` ORDER BY `qty` DESC LIMIT 5");
					        while ($row=mysqli_fetch_array($rows)) {
                            $name=$row['x'];
                            $tt=$row['y'];
                                $rs=query("SELECT `product_title` FROM `products` WHERE `product_id`=$name");
                                while ($r=mysqli_fetch_array($rs)) {
                                    $nae=$r['product_title'];
                                
                            ?>
                            <tr class="">
                                <td>Tên sản phẩm</td><td><input type="text" class="form-control" value="<?php echo $nae; ?>"></td>
                            </tr>
                            <tr class="">
                                <td>Lượng tiêu thụ</td><td><input type="text" class="form-control" value="<?php echo $tt; ?>"></td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </form>
                    <?php
                    break;
                    case 'doanhthu':
                    ?>
                    <form action="thongke.php?action=thunhap" method="POSt" class="">
                        <td class="">Ngày bắt đầu: </td><td class=""><input type="date" class="" value='' name="time1" required></td>
                        <td class="">Ngày kết thúc: </td><td class=""><input type="date" class="" value='' name="time2" required></td>
                        <input type="submit" class="btn-primary" >
                    </form>
                    
                    <?php 
                    break;
                    case 'thunhap':
                    ?>
                    <form action="" method="get" class="mm">
                        <table>
                            <?php
                            //$rows=query("SELECT SUM(`total`) as x FROM `orders` WHERE `date` BETWEEN DATE_ADD(STR_TO_DATE('$time1', '%M %d %Y'),INTERVAL 1 HOUR) AND DATE_ADD(STR_TO_DATE('$time2', '%M %d %Y'),INTERVAL 1 HOUR) ");
					        $rows=query("SELECT SUM(`total`) as x FROM `orders` WHERE `date` BETWEEN '$time1 00:00:00' AND '$time2 23:59:59' ");
					        
                            while ($row=mysqli_fetch_array($rows)) {
                            $tt=$row['x'];
                                
                            ?>
                            <tr class="">
                                <td>Thời gian bắt đầu</td><td><input type="text" class="form-control" value="<?php echo $time1; ?>"></td>
                                <td>Đến</td><td><input type="text" class="form-control" value="<?php echo $time2; ?>"></td>
                            </tr>
                            <tr class="">
                                <td>Tổng giá trị thu nhập</td><td><input type="text" class="form-control" value="<?php echo number_format($tt);?> VND"></td>
                            </tr>
                            <?php
                                
                            }
                            ?>
                        </table>
                    </form>



                    <?php
                    break;
                    }
                    ?>



















                    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                            </div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
<?php include "footer.php";?>