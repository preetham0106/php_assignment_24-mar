<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// echo $_POST['username'];
// echo $_POST['password'];
require_once __DIR__ .'/vendor/autoload.php';
use Exception;
use MongoDB\Client;
// Replace the placeholder with your Atlas connection string
$uri = 'mongodb://172.18.0.3:27017';

$_POST["mail"]=htmlspecialchars($_POST["mail"]);

if($_POST['mail']==="admin"&&$_POST['paswd']==="12345"){
  session_start();
 

 $_SESSION["mail"]=$_POST["mail"];
 header("Location: home.php");

exit();

 //echo session_id();

}
else{

  try{

    $client = new MongoDB\Client($uri);
    $collection = $client->selectDatabase("testdb")->selectCollection("users");
    $query=array();


    
    $query["email"]=$_POST["mail"];

    $count=$collection->countDocuments($filter=$query);

if($count<1)
{   
    echo "<script>alert('user does not exist')</script>";
    
    header("refresh:1;signup.html");
    
    exit;
}
else{

    $result=$collection->findOne([
      
      
      'email' => $_POST["mail"],
      'password' => $_POST["paswd"],
     
  ]);

  if(json_encode($result)==="null"){
    echo "<script>alert('invalid credentials')</script>";
    header("refresh:1;session.php");
    
  }
  else{


      session_start();
       
       echo json_encode($result);
       $_SESSION["mail"]=$_POST["mail"];
       $_SESSION['name']=$result->name;

       

       header("Location: home.php");

     exit();



  }

  //echo json_encode($result);

  
  }
}
  catch(Exception $e){

     echo $e;

  }

}







?>