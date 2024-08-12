<?php
   
    include ("config.php");

    if (isset($_POST['edit']) ) {		
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$phonenumber= $_REQUEST['phonenumber'];
		$date= $_REQUEST['date'];
		$genter = $_REQUEST['genter'];
    $qualification =  implode(',', $_POST['qualification']);
		$country1 =  $_POST['country1'];
    $address = $_REQUEST['address'];
   
    
    $sqli = "UPDATE `register1` SET username =$username ,email ='email', passwor='$password', phonenumber='$phonenumber','date=$date' ,'genter'='$genter','qualification'='$qualification','country1'='$country1','address'='$address',
  WHERE username='$username'";
    mysqli_query($conn,$sqli);
    }
echo "<script>alert('SUCESSFULLY UPDATE YOUR DETAIL');window.location.href='admin.php';</script>"; 

    ?>