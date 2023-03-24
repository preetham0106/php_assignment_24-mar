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
// Create a new client and connect to the server
try{

$client = new MongoDB\Client($uri);
$collection = $client->selectDatabase("testdb")->selectCollection("users");
$query=array();

$query["email"]=$_POST["email"];
$count=$collection->countDocuments($filter=$query);

if($count >=1)
{   
    echo "<script>alert('user already exists')</script>";

    header("refresh:1;session.php");

    exit;
}
$insertOneResult = $collection->insertOne([
    'username'=>$_POST["username"],
    "name"=>$_POST["name"],
    'email' => $_POST["email"],
    'password' => $_POST["paswd"],
   
]);
   
   
   
   // $_SESSION['expireTime']= time();

   echo "<script>alert('your data saved')</script>";

   // echo "Session set successfully";

    header("refresh:1;login.php");

// setcookie('username', $_POST['username'], time() + 3600);
// setcookie('password', $_POST['password'], time() + 3600);

}
catch(Exception $e)
{
    echo "<h1>Couldn't Add User</h1><br>".$e;
}
?>