<?php
session_start();
$dataconnection = mysqli_connect("db.fr-pari1.bengt.wasmernet.com","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh","10272");
if(!$dataconnection){
    die("404 error".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';

    $sql = "SELECT * FROM data5 WHERE email = ? AND pass = ? LIMIT 1";
    $stmt = mysqli_prepare($dataconnection, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $pass);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) === 1){
        $_SESSION['is_admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        echo "Invalid email or password";
    }

    mysqli_stmt_close($stmt);
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>




<?php



$conn1 = mysqli_connect("db.fr-pari1.bengt.wasmernet.com","fc42d62b7f45800045be24109f94","068afc42-d62c-7138-8000-606ab9579cd1","subhamsingh","10272");

if (!$conn1) {
    die("The database connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'] ?? '';
    $pass1 = $_POST['pass'] ?? '';

    // Query to match user with given name and password
    $sql = "SELECT * FROM data5 WHERE email = ? AND pass =? LIMIT 1";
    $stat = mysqli_prepare($conn1,$sql);
    mysqli_stmt_bind_param($stat,"ss",$email,$pass1);
    mysqli_stmt_execute($stat);
    $res =  mysqli_stmt_get_result($stat);
    if(mysqli_num_rows($res)>0){
        echo "done";
        header("location:admin.php");
        exit;
    }
    else{
        echo "not done";
    }
    mysqli_stmt_close($stat);
    
}

mysqli_close($conn1);



?>


   <div class="banner">
<video id="vi" autoplay muted loop>
    <source src="j.mp4" type="video/mp4"> 
</video>
<div id="main">
    <h1> myntra login / singup </h1>
</div>



<form method="post">

<fieldset id="part2">


<h1>singin</h1>
      
        <label for=""> enter your email address*</label>
        <input id="email" type="text" name="email" required>
       <br><label for=""> enter the  password*</label>
<br><br>
<input type="password" name="pass" id="pass" required>

<br>
<br>
  <input id="btt2" type="submit" value="click me" name="button2">
    <button id="log"><a href="regester.php"> singup</a></button>


</fieldset>


</form>
</div>
    
<script src="index3.js"></script>
</body>

</html>

