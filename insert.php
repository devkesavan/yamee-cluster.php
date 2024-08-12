<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	
</head>
<body>
    <header>
	<nav class="navbar">
		<div class="navdiv">
			<div class="logo"><a href="#">Yamee Cluster</a> </div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="user.php">user details</a></li>
				<button><a href="indexs.php">Login</a></button>
				<button><a href="regiser.php">Register</a></button>
			</ul>
		</div>
	</nav>
    </header>
    <section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
      
    }
    .ram{
      height: 300px;
      width: 400px;
      
    
    }
  </style>

      
<?php
     include ("config.php");

   
     if (isset($_POST['submit']) ) {		
      $username = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $phonenumber= $_POST['phonenumber'];
      $date= $_REQUEST['date'];
      $genter = $_REQUEST['genter'];
      $qualification =  implode(',', $_POST['qualification']);
      $country1 =  $_POST['country1'];
      $address = $_POST['address'];
     
      
	
    $sqli = "INSERT INTO `register1`(`username`, `email`, `password`, `phonenumber`, `date`, `genter`, `qualification`, `country1`, `address`) VALUES ('$username','$email','$password','$phonenumber','$date','$genter','$qualification','$country1','$address')";
    mysqli_query($conn, $sqli);
   $sqli2="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";
   mysqli_query($conn, $sqli2);
   
    echo "<script>alert('SUCESSFULLY REGISTER YOUR DETAIL');window.location.href='indexs.php';</script>"; 
    
    }
    mysqli_close($conn);
   
    ?>

        </div>
      </div>
      
    </div>
  </div>

 <div style="display:flex;padding-top: 50px; padding-left:300px;">
<a href="indexs.php"><button class="btn btn--radius-2 btn--blue butt"  name="login" type="submit">LOGOUT</button></a></div>

          

        </div>
      </div>
      
    </div>
  </div>
       
    



</body>
<script src="script1.js" defer></script>
</html>