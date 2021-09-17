
   
   
   
    <?php
session_start();
include("../db.php");

error_reporting(0);

include "sidenav.php";
include "topheader.php";
?>






<?php
 
$dataPoints = array();
//Best practice is to create a separate file for handling connection to database
try{
     // Creating a new connection.
    // Replace your-hostname, your-db, your-username, your-password according to your database
    $link = new \PDO(   'mysql:host=localhost;dbname=shop_hoa;charset=utf8mb4', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                        'root', //'root',
                        '', //'',
                        array(
                            \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                        )
                    );
    
    //$handle = $link->prepare("SELECT `product_id` as x, `product_price` as y FROM `products`");
    
    $handle = $link->prepare("SELECT `id`as x,`total`as y FROM `orders` ORDER BY `total` DESC LIMIT 3");

    
    $handle->execute(); 
    $result = $handle->fetchAll(\PDO::FETCH_OBJ);
        
    foreach($result as $row){
        array_push($dataPoints, array("x"=> $row->x, "y"=> $row->y));
    }


    $link = null;
}
catch(\PDOException $ex){
    print($ex->getMessage());
}
    
?>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    theme: "dark1", // "light1", "light2", "dark1", "dark2"
    title:{
        text: "Thống kê"
    },
    data: [{
        type: "column", //change type to bar, line, area, pie, etc  
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
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
                    
                    <div id="chartContainer" style="height: 400px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



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

      <?php
include "footer.php";
?>