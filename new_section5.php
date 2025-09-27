<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Day Cream</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
      
    <ul>
      <li> <img src="pics/y.png" id="image"></li>
      <li><a href="">men</a></li>
      <li><a href="">woman</a></li>
      <li><a href="">kids</a></li>
      <li><a href="">home</a></li>
      <li><a href="">beauty</a></li>
      <li><a href="">genz</a></li>
      <li><a href="">studio<sup id="col"> new</sup></a></li>
    </ul>
<fieldset>
<form action="data1.php">
  <button id="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
<input type="text" name="search" id="in" placeholder="search for products">
</form>
</fieldset>
    <span >
      <a href="regester.php">      <i class="fa fa-user" aria-hidden="true"></i>
</a>
      <p class="pfont">profile</p>

    </span>
<span id="ico">
  <i class="fa fa-heart" aria-hidden="true"></i>
 <p class="pfont">whishlist</p>
</span>
<span>
  <i class="fa fa-shopping-bag" aria-hidden="true"></i>
 <p class="pfont">bag</p>
</span>
</div>

<!-- Product Banner -->
<div class="product_banner1">
<!-- link to db 1 for image  -->
 <?php 
 $conn = mysqli_connect("localhost","root","","subham");
 if(!$conn){
     die("Connection failed: ". mysqli_connect_error());
 }
 $mysql = "SELECT * FROM data3 WHERE id=2 ";
 $result = mysqli_query($conn,$mysql);
 $RES = mysqli_fetch_assoc($result);
 ?>
 <img id="my_image" src="<?php echo $RES['image']; ?>" alt="">


 <div class="detials_for_product">
  <h1>Lotus Herbals

</h1>
  <br>
  <p id="pp">Whiteglow Skin Whitening Brightening SPF 25++ Gel Creme 60g</p>
<span id="newproduct1">4.5 <i class="fa fa-star" aria-hidden="true"></i>  22.2k rating <hr></span>
<!-- php for find the price  -->
 <?php
 $conn2 = mysqli_connect("localhost","root","","subham");
  if(!$conn2){
      die("Connection failed: ". mysqli_connect_error());
  }
  $sql2 =  "SELECT * FROM data3 WHERE id = 2 ";
  $result2 =mysqli_query($conn2,$sql2);
  $RES2 = mysqli_fetch_assoc($result2);
 
 ?>
<span id="newproduct2"> ₹ <?php echo $RES2['number_price']; ?> <span style="color:gray"> MRP  <span style=" text-decoration: line-through;">₹ 466</span>  (24% off)</span></span>
<div class="boxofpro">
  <h3>about this item</h3>
  <p>Whiteglow Skin Whitening Brightening SPF 25++ Gel Creme 60g</p>
  <p>Lotus Herbals Whiteglow Skin Whitening Brightening Gel Creme is a unique formulation that helps to lighten and brighten the skin tone while providing sun protection.</p>
  <p>It is enriched with natural ingredients that nourish the skin and improve its texture.</p>
  <p>It is suitable for all skin types and can be used daily for best results.</p>
  <p>Net Quantity: 60 g</p>
  <p>Skin Type: All Skin Types</p>
  <button id="btn1">add to bag</button>
  <button id="btn2">whishlist</button>
 </div>
</div>
</div>
</body>
</html>