 <?php
session_start();
include("../db.php");
error_reporting(0);

// if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
// {
// $product_id=$_GET['product_id'];
// ///////picture delete/////////
// $result=mysqli_query($conn,"select product_image from products where product_id='$product_id'")
// or die("query is incorrect...");

// list($picture)=mysqli_fetch_array($result);
// $path="../img/product/$picture";

// if(file_exists($path)==true)
// {
//     unlink($path);
// }
// else
// {}

if(isset($_GET['action']))
{
	$action=$_GET['action'];
}
else
{
	$action="";
}
if(isset($_GET['product_id']))
{
	$product_id=$_GET['product_id'];
}   
else
{
	$product_id=0;
}
switch ($action) {
  case 'delete':
    query("delete from products where product_id=$product_id")or die("query is incorrect...");
    break;
}



///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Products List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>Image</th><th>Name</th><th>Price</th><th>
	                          <a class=" btn btn-primary" href="addproduct.php">Add New</a></th></tr></thead>
                    <tbody>
                    <?php $rows=query("select *from products");
                        while ($row=mysqli_fetch_array($rows)) {
                          $image=$row['product_image'];
                          $price=$row['product_price'];
                          $product_name=$row['product_title'];
                          $product_id=$row['product_id'];
                        echo "<tr><td><img src='../img/product/$image' style='width:50px; height:50px; border:groove #000'></td><td>$product_name</td>
                        <td>$price</td>
                        <td>
                        <a class=' btn btn-success' href='productlist.php?action=delete&product_id=$product_id'>Delete</a>
                        </td></tr>";
                        }
                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 





//counting paging
                $paging=mysqli_query($conn,"select product_id,product_image, product_title,product_price from products");
                $count=mysqli_num_rows($paging);
                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            
           

          </div>
          
          
        </div>
      </div>
      <?php
include "footer.php";
?>