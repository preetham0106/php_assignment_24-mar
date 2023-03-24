<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  .card{
    border:"2px solid yellow";
    margin-top:"30px";
    display:"flex";
  }
  </style>
</head>
<body style="background-color:aqua">



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Login Form</h5>
          <form method="post" action="/login.php">
            <div class="form-group">
              <label for="username">email:</label>
              <input type="text" class="form-control" id="username" name="mail"  placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="paswd" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </form>

        </div>
        <div>
   <p>Dont have an account please signup</p>
   <a class="btn btn-success" href="signup.html">signup</a>
</div>
      </div>
    </div>
  </div>
</div>


<div class="d-flex justify-content-center vh-100 align-items-center ">
  
<!-- <form method="post" action="/login.php" >
    <div class="row">
    <label for="email">email</label>
    <input type="text" id="email" name="mail">
</div>
    <div class="row">
    <label for="password">password</label>
    <input type="text" id="password" name="paswd">
</div>
    <button type="submit"  class="btn btn-primary">submit</button>
</form> -->
</div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<?php

//include 'RecruitmentAnalyticsViewPII';
// session_start();

//print_r($_SESSION);
// echo $_SESSION["mail"];
// echo "hello";
// $past = time() - 3600;
// foreach ( $_COOKIE as $key => $value )
// {
//     setcookie( $key, $value, $past, '/' );
// }
//echo $_SESSION["mail"];

// session_destroy();
//echo $_SESSION["mail"]

//echo "<h1>hello mr.",$_SESSION["mail"],"</h1>";


//echo $_SERVER["PHP_SELF"];

// $test = RecruitmentAnalyticsViewPII::model()->findAll();

// echo $_SERVER["PHP_SELF"];

// echo $test;
// $_POST["mail"]=htmlspecialchars($_POST["mail"]);
// // print_r($_POST);
// if($_POST['mail']==="admin"&&$_POST['paswd']==="12345"){
//    session_start();
//   // echo "<h1> your data </h1><br>";
//   // echo $_POST["mail"],$_POST['paswd'];
//   // session_start();

//   $_SESSION["mail"]=$_POST["mail"];
//   //$_SESSION["paswd"]=$_POST["paswd"];

//   header("Location: home.php");
// exit();

//   //echo session_id();

// }

//session_start();
// print_r($_SESSION);
// if (!isset($_SESSION['count'])) {
//   $_SESSION['count'] = 0;
// } else {
//   $_SESSION['count']++;
// }
// print_r($_SESSION);
// print_r(session_id())
?>
</html>
