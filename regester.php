<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myntra login/singup</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <div class="banner">
<video id="vi" autoplay muted loop>
    <source src="j.mp4" type="video/mp4"> 
</video>

<!-- php form data 1 -->
 <?php
 $conn =  mysqli_connect("db.fr-pari1.bengt.wasmernet.com","10272","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh");
 if(!$conn){
die("the data is not connected".mysqli_connect_error());
 }
 if($_SERVER['REQUEST_METHOD'] === "POST"){
$name=$_POST['username']?? '';
$email=$_POST['email']?? '';
$username=$_POST['username2']?? '';
$pass=$_POST['pass']?? '';
$num=$_POST['numebr']?? '';
$male=$_POST['male']?? '';
$female=$_POST['female']?? '';

$sql = "INSERT INTO `data5` ( `name`, `email`, `username`, `numebr`, `pass`, `male`, `female`) VALUES 
('$name','$email','$username','$num','$pass','$male','$female')";
if(mysqli_query($conn, $sql)){
    echo "<p class='pp'> singup sucessfully please  <a id='hh' href='regester2.php'>login</a></p>";
}
else{
    echo "the data has not sent";
}



 }
 mysqli_close($conn);
 ?>
 <!-- end -->



<div id="main">
    <h1> myntra login / singup </h1>
</div>


<form method="post">
    <fieldset id="ff">
        <h1>singup</h1>
        <label for="">enter your name* </label>
        <br><br>
        <input id="username" type="text" name="username">
        <br><br>
        <label for=""> enter your email address*</label>
        <input id="email" type="text" name="email">
        <br><br>
        <label for=""> enter the username(optional)</label>
        <br><br>
<input type="text" name="username2">
<br>
<br>

<label for=""> enter your phone number*</label>
<br><br>
<input id="number" type="text" name="numebr" maxlength="10">
<br><label for=""> enter the  password*</label>
<br><br>
<input type="password" name="pass" id="pass">
<br><br>
<label for="">male</label>
<input id="male" type="checkbox" name="male">
<label for="">female</label>
<input type="checkbox" name="female" id="female">
    <input id="btt" type="submit" value="singup" >
    <button id="log"><a href="regester2.php"> login</a></button>
    </fieldset>
</form>

<!-- <form action="post">

<fieldset id="part2">


<h1>singin</h1>
      
        <label for=""> enter your email address*</label>
        <input id="email" type="text" name="email">
       <br><label for=""> enter the  password*</label>
<br><br>
<input type="password" name="pass" id="pass">
s
<br>
<br>
  <input id="btt2" type="button" value="click me" name="button2">


</fieldset>


</form> -->

    </div>




    <script src="index3.js"></script>
</body>

</html>
