<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




	<title>My Beautiful Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="home.php">About</a></li>
				<li><a href="home.php">Contact</a></li>
                <li><a href="logout.php">logout</a></li>
			</ul>
		</nav>
	</header>
    
    <h1>Welcome <?php  session_start(); echo $_SESSION["name"]; ?></h1>
    <p>Its been great to see you. What can we do for you.</p>
	
	
    
</body>

<?php 
//print($_SESSION);

//print($_SESSION);
   if($_SESSION["mail"]=='null'){
    
    session_destroy();
    header('location:login.php');

   }
   
?>
</html>