<?php
require_once "db.php";
session_start();

if(isset($_GET['id'])){
	$id=$_GET['id'];
} 

$action=(isset($_GET['action'])?$_GET['action']:'add');
$qty=(isset($_GET['qty']))?$_GET['qty']:1;
if($qty<=0){
	$qty=1;
}

$query=query("SELECT * FROM `products`WHERE product_id=$id");

if($query){
	$product=mysqli_fetch_assoc($query);
}

$item=[ 
	'id'=>$product['product_id'],
	'image'=>$product['product_image'],
	// 'price'=>($product['sale_price']>0)?$product['sale_price']: $product['price'],
	'price'=>$product['product_price'],
	'qty'=>$qty
];

if($action=='add'){
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['qty']+=$qty;
	}
	else{
		$_SESSION['cart'][$id]=$item;
	}
}

if($action=='update'){
	$_SESSION['cart'][$id]['qty']=$qty;
}
if($action=='delete'){
	unset($_SESSION['cart'][$id]);
}



header('location:view2.php');
echo "<pre>";
print_r($_SESSION['cart']);

?>