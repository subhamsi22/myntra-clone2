<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shoping for Womans and Mens </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
  </head>
<body>
<?php
$str = range('a','m');
$str1 = range('a','y');
$str2 = range('a','n');
$str3 = range('a','t');
$str4 = range('a','r');
$str5 = range('a','a');
?>

<?php

$server = "db.fr-pari1.bengt.wasmernet.com";
$port = "10272";
$username = "fc42d62b7f45800045be24109f94";
$password = "068afc42-d62c-7138-8000-606ab9579cd1";
$db = "subhamsingh";

$conn = mysqli_connect($server,$port,$username,$password,$db);
$sql = "SELECT * FROM data1 ORDER BY id DESC ";
$res = mysqli_query($conn,$sql);

?>
<div id="loader">
 
  <h1 id="start"></h1>
  <h1 id="start1"> </h1>
  <h1 id="start2"></h1>
  <h1 id="start3"></h1>
  <h1 id="start4"></h1>
  <h1 id="start5"></h1>
</div>
<div id="main">
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
<div class="container">
 <i class="fa-solid fa-chevron-left" id="prv"></i>
  <div class="frame">
<div class="slide">
    <?php
    while($row=mysqli_fetch_assoc($res)):?>
    <div class="box">
<h3><?php echo $row['name'];?> </h3>
<h3><?php echo $row['price'];?> </h3>
<h3><?php echo $row['details'];?> </h3>
<img id="image" src="<?php echo $row['image'];?>" alt="">


    </div>
<?php endwhile; ?>


    </div>
  </div>
 <i class="fa-solid fa-chevron-right" id="next"></i>
</div>







<?php
$server2 = "db.fr-pari1.bengt.wasmernet.com";
$port2 = "10272";
$username2 = "fc42d62b7f45800045be24109f94";
$password2 = "068afc42-d62c-7138-8000-606ab9579cd1";
$db2 = "subhamsingh"; 

$conn2 = mysqli_connect($server2 ,$port2,$username2,$password2,$db2);
$sql2 = "SELECT *FROM data2 ORDER BY id DESC";
$res2 = mysqli_query($conn2 , $sql2);
?>


<div class="banner2">
  <div class="container2">
    <div class="frame2">
      <div class="slide2">
        <?php while($row2 = mysqli_fetch_assoc($res2)):?>

        <div class="box2">
          <img id="imagech2"src=<?php echo $row2['image'] ?> alt="">
<h3 id="prod"><?php echo $row2['productname']; ?><br></h3>

 <h3 id="pricee">₹<?php echo $row2['price']; ?><br></h3>
 <h3 id="diss"> <?php echo $row2['discription']; ?>
        </h3>
      </div><?php endwhile;?></div></div></div>
<?php
$server3 = "db.fr-pari1.bengt.wasmernet.com";
$port3 = "10272";
$username3 = "fc42d62b7f45800045be24109f94";
$password3 = "068afc42-d62c-7138-8000-606ab9579cd1";
$db3 = "subham";
$conn3 = mysqli_connect($server3 ,$port3,$username3,$password3,$db3);
$sql3 =  "SELECT *FROM data3 ORDER BY id DESC";
$res3 =  mysqli_query($conn3, $sql3);
?>







<!-- main div -->


<div class="adv">
  <div class="changeflip">
    

  </div>
</div>


<!-- 3erd box 
  -->






  <div class="container3">
     <i class="fa-solid fa-chevron-left" id="prv11"></i>

    <div class="frame3">
      <div class="slide3">
        <?php while($row3 = mysqli_fetch_assoc($res3)): ?>
<div class="box3">
 
<img class="imgg" src=<?php  echo $row3['image']; ?> alt="">
<div class="newbox">
<h1 class="newtext"><?php echo $row3['discriptionn']; ?></h1>

<h1 id="secondtext"><?php echo $row3['productname']; ?></h1>
<h2 class="prc"> ₹<?php echo $row3['number_price']; ?></h2>

</div>


        </div>
        <?php  endwhile; ?>
      </div>
    </div>
     <i class="fa-solid fa-chevron-right" id="next11"></i>

  </div>





</div>

<div class="banner3">


  <?php
  
  $server4 = "db.fr-pari1.bengt.wasmernet.com";
  $port4 ="10272";
$username4 = "fc42d62b7f45800045be24109f94";
$password4 = "068afc42-d62c-7138-8000-606ab9579cd1";
$db4 = "subhamsingh";
$conn4 = mysqli_connect($server4 ,$port4,$username4,$password4,$db4);
$sql4 =  "SELECT *FROM data4 ORDER BY id DESC";
$res4 = mysqli_query($conn4,$sql4);


?>


  <h1>
    shop by catagory
  </h1>
  <div class="grid">
   <?php while($row4 = mysqli_fetch_assoc($res4)):?>
    <div class="boxgrid">
          <img  class="imgggg" src="<?php echo $row4['image']; ?>" alt="">

      <h2 class="hh1">
        <?php  echo $row4['name'];?>
      </h2>
            <h2  class="h11p">
              <span>₹</span>
              <?php echo $row4['price']; ?>
   </h2>
    
        <button class="hh1pp">
<h2 id="fff">
<?php echo $row4['dis']; ?>
</h2>
        

        </button>
      
                  
    </div>
    <?php endwhile; ?>
  </div>
</div>


<footer>
  <table> <tr>
    <th>
      online shopping
    </th>
    <th> 
      coustmer polices
    </th>
  </tr>

<tr>
  <td>
    men
  </td>
  <td>contact us</td>
  
</tr>
<tr>
  <td>
    woman
  </td>
  <td>
    faq
  </td>
</tr>


<tr>
  <td>
    kids
  </td>
  <td>
    t&c
  </td>
</tr>


<tr>
  <td>
    home
  </td>
  <td>
    term
  </td>
</tr>
<tr>
  <td>
    beuaty
  </td>
  <td>
track complint  </td>
</tr>
<tr>
  <td>
    genz
  </td>
  <td>
    fashipping
  </td>
</tr>
<tr>
  <td>
    gift cards
  </td>
  <td>
    cancel
  </td>
</tr>
<tr>
  <td>
    myntra insider
  </td>
  <td>
    return policy
  </td>
</tr>
</table>

<h1 id="h1s">EXPERIENCE MYNTRA APP ON MOBILE

</h1>
 <img id="gg" src="pics/dd.png" alt="">
  <img id="aa" src="pics/aa.png" alt="">

  <div class="h2">
<h2>
  keep in touch
</h2>
  <a href="https://facebook.com" target="_blank">
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="https://twitter.com" target="_blank">
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </a>
    <a href="https://youtube.com" target="_blank">
      <i class="fa fa-youtube-play" aria-hidden="true"></i>
    </a>
    <a href="https://instagram.com" target="_blank">
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </a>


  </div>


</footer>
<div class="introo">
  <h1>2025 @ copyright clone by |  subham singh</h1>
</div>




</div>




<script>
  var phpdata = <?php echo json_encode($str); ?>;
  var phpdata1 = <?php echo json_encode($str1);?>;
  var phpdata2 = <?php echo json_encode($str2);?>;
   var phpdata3 = <?php echo json_encode($str3); ?>;
  var phpdata4 = <?php echo json_encode($str4);?>;
  var phpdata5 = <?php echo json_encode($str5);?>;

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="index.js"></script>

</body>
</html>
