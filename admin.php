

<?php
session_start();

if (!isset($_SESSION['is_admin_logged_in']) || $_SESSION['is_admin_logged_in'] !== true) {
    header("Location: regester2.php");
    exit();
}




$server = "db.fr-pari1.bengt.wasmernet.com";
$port = "10272";
$username = "fc42d62b7f45800045be24109f94";
$pass = "068afc42-d62c-7138-8000-606ab9579cd1";
$db = "subhamsingh";
$connection = mysqli_connect($server,$port,$username,$pass,$db);
if(!$connection){
    die("this connection is not successful".mysqli_connect_error());
}
  

if($_SERVER['REQUEST_METHOD']==="POST"){
    $name = $_POST['detls'] ?? '';
    $price = $_POST['price']?? '';
    $dis = $_POST['dis']?? '';
    $image = $_FILES['files']['name']?? '';
            $tmp_image = $_FILES['files']['tmp_name']?? '';

    $target =  "upload/" . basename( $image );
$imagepath = $target;
    if(move_uploaded_file($tmp_image,$target)){
$sql = "INSERT INTO `data1` (name, price, details, image) VALUES ('$name', '$price', '$dis', '$imagepath')";
if(mysqli_query($connection,$sql)){
    echo "<p class='hdb'>the data has been sent</p>";

}
else{
    echo "404 error";

}
    }
    else{
        echo " ";
    }


mysqli_close($connection);
}



?> 


<!-- new php for profile -->
<?php
$profileconnection = mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
if(!$profileconnection){
    die("404 error".mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] === "POST"|| isset($_POST['upload_files'])){
    $profile_img  = $_FILES['profile_image']['name'];
    $temp_profile_img = $_FILES['profile_image']['tmp_name'];
    $target_profile_img = "upload6/" .basename($profile_img);
    $imagepath44 = $target_profile_img;
    if(move_uploaded_file($temp_profile_img,$target_profile_img)){
$sqlforprifile = "INSERT INTO `data6` (image) VALUES ('$imagepath44')";
    }

    if(mysqli_query($profileconnection,$sqlforprifile)){
        echo "<p class='hdb'>the data has been sent</p>";
    }


}
mysqli_close($profileconnection);
?>


<!-- 2 -->

<?php
$profileconnection2 = mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
$sqlforprifile2 = "SELECT * FROM `data6` ORDER BY id DESC LIMIT 1";
$resultforprofile = mysqli_query($profileconnection2,$sqlforprifile2);
$result222 = mysqli_fetch_assoc($resultforprofile);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myntra Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>   
    <div id="banner1">
<div class="nav">

    <img id="im" src="download.png" alt="">
   <h1>myntra admin pannel</h1>
<img id="pro" src="<?php echo $result222['image']; ?>" alt="">


<button id="profile_button">🖋️</button>

    <ul>
        <li><a href="">dashboard</a></li>
        
        <li id="big"><a href=""> upload</a> <i id="bigclick" class="fa-solid fa-chevron-down"></i><i id="bigclick2" class="fa-solid fa-chevron-up"></i>
        <div class="new">
            <ul>
           <li id="slideuploadopen"><h2>slide upload</h2></li>
           
<li id="slideuploadopen2"><h2>2nd slide upload</h2></li>
<li id="slideuploadopen3"><h2>3rd slide upload</h2></li>

<li id="slideuploadopen4"><h2>main upload</h2></li>


            </ul>
        </div>
        </li>
        
        <li><a href="">profile</a></li>
        
        <li><a href="http://localhost/e_commece_site/">logout</a></li>
    </ul>
</div>












<!-- admin main -->























<div class="slideup">


<?php
 $serverconection4 =mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
 if(!$serverconection4 ){
    die("404 erroe".mysqli_connect_error());

 }
 if(isset($_POST['delete_all4'])){
    $dele4  = "DELETE FROM data1";
    $alter4 = "ALTER TABLE data1 AUTO_INCREMENT = 1";
    if($serverconection4->query($dele4)===TRUE)  {
        if($serverconection4->query($alter4)===TRUE){
            echo "the data has been sent ";

        }
        else {
         echo "the data has notbeen sent";
        }
    }
    else {
        echo "404 not sent";
    }

 }
 $serverconection4->close();


 ?>

<!-- ending -->

<form method="POST">
<div class="delete">
    <h1 class="delh1"> click the button to delete the row of this table </h1>
   

    <button id="delbutt" type="submit" name ="delete_all4">Delete</button>
    </div>
</form>

  <!-- php submit section -->
   <?php
   $ser = "localhost";
   $user = "root";
   $pas = "";
   $dbb = "subham";
   $connn =  mysqli_connect($ser,$user,$pas,$dbb);
   $sqlii  = "SELECT *FROM `data1` ORDER BY id DESC";
   $res =  mysqli_query($connn,$sqlii);



   ?>

    <h1 id="mai">slide upload</h1>
    <h1 id="boxupload">
        total porduct uploaded :
        <br>

        <?php $raw22 =  mysqli_fetch_assoc($res);
       $fisrt_data= $raw22['id'];
         echo $fisrt_data;
          ?>
    </h1>

<div class="form" >
    <form method="POST" enctype="multipart/form-data" id='myfrom'>
        <input type="text" name="detls" placeholder=" enter the product name ">
        <br>
        <input type="number" name="price" placeholder="enter the price of product">
        <br>
        <textarea name="dis"  rows="4" cols="3" placeholder="enter your product details"></textarea>
        <br>
        <label for="upload" class="custom-upload">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
upload files
        </label>
        <input id="fileup" type="file" name="files">
        <button  type="submit" id="buttonsubmit"> submit</button>
    </form>
    </div>
</div>


<!-- 2ns slide -->



<!-- PHP START -->
<?php

$server2 = "db.fr-pari1.bengt.wasmernet.com";
$port2 = "10272";
$username2 = "fc42d62b7f45800045be24109f94";
$pass2 = "068afc42-d62c-7138-8000-606ab9579cd1";
$db2 = "subhamsingh";
$connection2 = mysqli_connect($server2,$port2,$username2,$pass2,$db2);
if(!$connection2){
    die("this connection is not successful".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['price2'])){
    $name1 = $_POST['detls2'] ?? '';
    $price2 = $_POST['price2'] ?? '';
    $dis2 = $_POST['dis2'] ?? '';
    $image2 = $_FILES['files2']['name'] ?? '';
    $tmp_image2 = $_FILES['files2']['tmp_name']?? '';


    $target2 = "upload2/".basename($image2);
    $imagepath2 =  $target2;

    if(move_uploaded_file($tmp_image2,$target2)){
        
 $sql2 = "INSERT INTO `data2` (productname, price, discription, image) 
 VALUES ('$name1','$price2','$dis2','$imagepath2')";

    
    if(mysqli_query($connection2, $sql2)){
    echo "<p class='hdb'>the data has been sent</p>";
    }
    else {
        echo "this is not done" .mysqli_error($connection2);;
    }
}
    else{
        echo"404";
    }
}
    mysqli_close($connection2);

?>
<!-- php end  -->

<div class="slideup2">

<?php
 $serverconection3 =mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
 if(!$serverconection3 ){
    die("404 erroe".mysqli_connect_error());

 }
 if(isset($_POST['delete_all3'])){
    $dele2  = "DELETE FROM data2";
    $alter3 = "ALTER TABLE data2 AUTO_INCREMENT = 1";
    if($serverconection3->query($dele2)===TRUE)
    {
        if($serverconection3->query($alter3)===TRUE){
            echo "the data has been sent ";

        }
        else {
         echo "the data has notbeen sent";
        }
    }
    else {
        echo "404 not sent";
    }

 }
 $serverconection3->close();


 ?>

<!-- ending -->

<form method="POST">
<div class="delete">
    <h1 class="delh1"> click the button to delete the row of this table </h1>
   

    <button id="delbutt" type="submit" name ="delete_all3">Delete </button>
    </div>
</form>



<!-- php data showing -->
 <?php
  $ser2 = "db.fr-pari1.bengt.wasmernet.com";
  $port2 = "10272";
   $user2 = "fc42d62b7f45800045be24109f94";
   $pas2 = "068afc42-d62c-7138-8000-606ab9579cd1";
   $dbb2= "subhamsingh";
   $conn2 = mysqli_connect($ser2,$port2,$user2,$pas2,$dbb2);
   $sqli2 =  'SELECT *FROM `data2` ORDER BY id DESC ';
   $res22 = mysqli_query($conn2,$sqli2);

 ?>
<h1 id="boxupload">
     total porduct uploaded :
<?php 
$row22 = mysqli_fetch_assoc($res22);
$second_data = $row22['id'];
echo $second_data;
?>
</h1>

    <h1 id="mai">2nd slide upload</h1>

<div class="form" >
    <form method="POST" enctype="multipart/form-data" id='myfrom'>
        <input type="text" name="detls2" placeholder=" enter the product name ">
        <br>
        <input type="number" name="price2" placeholder="enter the price of product">
        <br>
        <textarea name="dis2"  rows="4" cols="3" placeholder="enter your product details"></textarea>
        <br>
        <label for="upload" class="custom-upload">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
upload files
        </label>
        <input id="fileup" type="file" name="files2">
        <button  type="submit" id="buttonsubmit2"> submit</button>
    </form>
    </div>
</div>

<!-- 3rd slide uplade -->



<?php
$server3 = "db.fr-pari1.bengt.wasmernet.com";
$port3 = "10272";
$username3 = "fc42d62b7f45800045be24109f94";
$pass3 = "068afc42-d62c-7138-8000-606ab9579cd1";
$db3 = "subhamsingh";
$connection3 = mysqli_connect($server3,$port3,$username3,$pass3,$db3);
if(!$connection3){
    die("this connection is not successful".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['price3'])){
    $name3  = $_POST ['detls3'] ?? '';
    $price3  = $_POST ['price3'] ?? '';
    $dis3  = $_POST ['dis3'] ?? '';
   $image3 = $_FILES['files3']['name'] ?? '';
      $tmp_image3 = $_FILES['files3']['tmp_name'] ?? '';

   $target3 = "upload3/".basename($image3);
   $imagepath3 = $target3;
    if(move_uploaded_file($tmp_image3,$target3)){
$sql3 = "INSERT INTO `data3` ( productname, number_price, discriptionn, image) VALUES 
        ('$name3', '$price3', '$dis3','$imagepath3')";
    
 
if(mysqli_query($connection3, $sql3)){
    echo "<p class='hdb'>the data has been sent</p>";
}
else{
    echo "<p class='hdb'>the data has been sent</p>";
}
}
else
{
     echo"404";
}
}
mysqli_close($connection3);
?>

<!-- endig -->
<!-- // data delete  -->

<!-- php for delete -->











<!--  data show for 3rd slide -->
<div class="slideup3">



 <?php
 $serverconection2 =mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
 if(!$serverconection2 ){
    die("404 erroe".mysqli_connect_error());

 }
 if(isset($_POST['delete_all2'])){
    $dele  = "DELETE FROM data3";
    $alter2 = "ALTER TABLE data3 AUTO_INCREMENT = 1";
    if($serverconection2->query($dele)===TRUE)
    {
        if($serverconection2->query($alter2)===TRUE){
            echo "the data has been sent ";

        }
        else {
         echo "the data has notbeen sent";
        }
    }
    else {
        echo "404 not sent";
    }

 }
 $serverconection2->close();


 ?>

<!-- ending -->

<form method="POST">
<div class="delete">
    <h1 class="delh1"> click the button to delete the row of this table </h1>
   

    <button id="delbutt" type="submit" name ="delete_all2">Delete</button>
    </div>
</form>
<!-- // ending -->


  <?php
  $server33 = "db.fr-pari1.bengt.wasmernet.com";
  $port33 = "10272";
  $username33 = "fc42d62b7f45800045be24109f94";
  $pass33 = "068afc42-d62c-7138-8000-606ab9579cd1";
  $db33 = "subhamsingh";
$connection33 = mysqli_connect($server33,$port33,$username33,$pass33,$db33);
$sqli33 = "SELECT *FROM `data3` ORDER BY id DESC";
$res33 = mysqli_query($connection33,$sqli33);


  ?>
  <!-- end -->
<div id="boxupload">
         total porduct uploaded :

<h1>
    <?php $row3 = mysqli_fetch_assoc($res33);
    $third_data = $row3['id'];
    echo $third_data;
    ?>
    
</h1>
</div>


 <h1 id="mai"> 3rd slide upload</h1>
<div class="form" >
    <form method="POST" enctype="multipart/form-data" id='myfrom'>
        <input type="text" name="detls3" placeholder=" enter the product name ">
        <br>
        <input type="number" name="price3" placeholder="enter the price of product">
        <br>
        <textarea name="dis3"  rows="4" cols="3" placeholder="enter your product details"></textarea>
        <br>
        <label for="upload" class="custom-upload">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
upload files
        </label>
        <input id="fileup" type="file" name="files3">
        <button  type="submit" id="buttonsubmit3"> submit</button>
    </form>
    </div>
</div>







<!-- main slide uplaod start from hear -->







<?php 
 $server4 ="db.fr-pari1.bengt.wasmernet.com";
 $port4 = "10272";
 $username4 = "fc42d62b7f45800045be24109f94";
 $pass4 = "068afc42-d62c-7138-8000-606ab9579cd1";
 $db4 = "subhamsingh";
 $connection4 = mysqli_connect($server4,$port4,$username4,$pass4,$db4);
 if(!$connection4){
    die("404 error".mysqli_connect_error());
 }

 if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['price4'])){
    $name4 = $_POST['detls4'] ?? '';
    $price4 = $_POST['price4'] ?? '';
    $dis4 = $_POST['dis4'] ?? '';
    $image4  = $_FILES['files4']['name'] ?? '';
    $tmp_image4 = $_FILES['files4']['tmp_name'] ?? '';
    $target4 =  "upload4/".basename($image4);
    $imagepath4  = $target4;
    if(move_uploaded_file( $tmp_image4,$target4  )){
     $sql4 =   " INSERT INTO `data4` ( name, price, dis, image)
      VALUES ('$name4','$price4','$dis4','$imagepath4')";
if(mysqli_query($connection4,$sql4)){
    echo "<p class='hdb'>the data has been sent</p>";

}
else {
    echo "<p class='hdb'>the data has been sent</p>";
}

    }
    else{
    echo "<p class='hdb'>the data has been sent</p>";
    }
 }
 mysqli_close($connection4);
?>


















<!-- main slide upload data showing  -->
<div class="slideup4">
  <?php
  $server334 = "db.fr-pari1.bengt.wasmernet.com";
  $port334 = "10272";
  $username334 = "fc42d62b7f45800045be24109f94";
  $pass334 = "068afc42-d62c-7138-8000-606ab9579cd1";
  $db334 = "subhamsingh";
$connection334 = mysqli_connect($server334,$port334,$username334,$pass334,$db334);
$sqli334 = "SELECT *FROM `data4` ORDER BY id DESC";
$res334 = mysqli_query($connection334,$sqli334);


  ?>
<div id="boxupload">
         total porduct uploaded :

<h1>
    <?php $row34 = mysqli_fetch_assoc($res334);
    $fourt_data = $row34['id'];
    echo $fourt_data;
    ?>
    
</h1>
</div>







<!-- php for delete in main slide -->

 <?php 
$serverdel= "db.fr-pari1.bengt.wasmernet.com";
$portdel = "10272";
$serveruserame = "fc42d62b7f45800045be24109f94";
$serverpass = "068afc42-d62c-7138-8000-606ab9579cd1";
$serverdatabase = "subhamsingh";
$serverconection = mysqli_connect($serverdel,$portdel,$serveruserame,$serverpass,$serverdatabase);
if(!$serverconection){
    die( "404 erroe".mysqli_connect_error());
}
 if(isset($_POST['delete_all'])){
    $tab = "DELETE FROM data4";
    $alter =  "ALTER TABLE data4 AUTO_INCREMENT = 1";

if($serverconection->query($tab) ===TRUE){
    if($serverconection->query($alter) ===TRUE)
    {
    echo  "he data has been delete";
    }
}
else {
    echo "the data has not been delete".$serverconection->error;
}
 }



$serverconection->close();
 ?>

<!-- ending -->
<!-- delete buttn -->
<form method="POST">

<div class="delete">
    <h1 class="delh1"> click the button to delete the row of this table </h1>
   

    <button id="delbutt" type="submit" name ="delete_all">Delete</button>
    </div>
</form>
<!-- ends hear -->





 <h1 id="mai"> main upload</h1>

 
   

<div class="form" >
    <form method="POST" enctype="multipart/form-data" id='myfrom'>
        <input type="text" name="detls4" placeholder=" enter the product name ">
        <br>
        <input type="number" name="price4" placeholder="enter the price of product">
        <br>
        <textarea name="dis4"  rows="4" cols="3" placeholder="enter your product details"></textarea>
        <br>
        <label for="upload" class="custom-upload">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
upload files
        </label>
        <input id="fileup" type="file" name="files4">
        <button  type="submit" id="buttonsubmit3"> submit</button>
    </form>
    </div>
</div>



<!-- ending -->


<?php
$final_total = $fisrt_data + $second_data + $third_data + $fourt_data;



?>
<div class="admin11">


<span> welcome </span>
<p id="newp">to mytra admin pannel</p>


<div class="profile">










<div id="profilenewbox">
<span id="x">x</span>
<form action="" method="post" enctype="multipart/form-data">
    <input id="profile_arrow" type="file" name="profile_image" accept="image/*">
    <input type="submit" value="Upload" name="upload_files">
</form>

</div>




</div>
<div class="maindata">
<div class="pagevisit">
    <p>visiter no:-</p>
    <div class="countprofile">

    </div>
</div>
<div class="product_visit">
    <p>product no:-</p>
    
        <h1 id="datah1"> <?php echo $final_total; ?></h1>



</div>

 <!-- // product visit end  -->

</div>

<!-- //main data  -->
 <div class="date1">
    <h1 id="date2">
    </h1>

 </div>
 <div class="date3">
<h1 id="datefinal">

</h1>
 </div>
 <div class="date4">
    <h1 id="dateq"></h1>
 </div>
 
<div class="grph">
    <p>100</p>
    <p>90</p>
    <p>80</p>
    <p>70</p>
    <p>60</p>
    <p>50</p>
    <p>40</p>
    <p>30</p>
    <p>20</p>
    <p>10</p>
    <p>0</p>
    <div class="graph1">
        
    </div>
 </div>


</div>





























    </div>
    <script>
    var php1  = <?php echo json_encode($fisrt_data); ?>;
</script>
    
        <script src="index2.js"></script>



</body>
</html>


