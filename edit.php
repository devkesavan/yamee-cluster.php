<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navigation Bar</title>
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
				<button><a href="login.html">Login</a></button>
				<button><a href="indexs.html">Register</a></button>
			</ul>
		</div>
	</nav>
    </header>



    <?php
include("config.php");

// Check if 'mes' parameter is set in the URL
if (!isset($_GET['mes'])) {
    header("location:admin.php");
    exit; // Terminate script execution after redirection
}

// Retrieve the value of 'mes' parameter from the URL
$username = $_GET['mes'];

// Prepare and execute the SQL query
$sqli = "SELECT * FROM register1 WHERE `username`='$username'";
$result = mysqli_query($conn, $sqli);

// Check if the query execution was successful
if (!$result) {
    // Handle query failure
    die("Error: " . mysqli_error($conn)); // Output the MySQL error and terminate script
}

// Fetch the first row from the result set
$row = mysqli_fetch_array($result);

// Check if a row was found
if (!$row) {
    // Handle no matching records found
    die("No record found for username: $username");
}

// Process retrieved data
$a = $row['qualification'];
$b = explode(",", $a);
$c = $row['genter'];

// Further code execution...
?>

    <div class="container">
        <header>Edit details </header>
        <form action="update.php" method="post" class="form"  enctype="multipart/form-data">
        <div class="input-box">
            <label for="Username">Username</label>
            <input type="text" name="username" class="form-control uppercase-input no-numbers-input" 
            value="<?php echo $row['username']; ?>"
            placeholder="Enter your name" required/>
            
          
        </div>
        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" 
            value="<?php echo $row['email']; ?>"
            placeholder="Enter your Email Address"id="Email" require/>
         
        </div>
        <div class="input-box">
            <label for="password">password</label>
            <input type="password" name="password" 
            value="<?php echo $row['password']; ?>"
            class="form-control" placeholder="Enter your password"id="password"require/>
           
        </div>
          <div>
            <div class="input-box">
                <label for="phonenumber">Phonenumber</label>
                <input type="" name="phonenumber" class="form-control"maxlength="10"
                value="<?php echo $row['phonenumber'];?>"
                placeholder="Enter your Phone number" require/>
              
            </div>
            <div class="input-box">
                <label>Birth date</label>
                <input type="date"name="date" 
                value="<?php echo $row['date']; ?>"
                class="form-control"  name="dob"
                 required/>
            </div>
          </div>

           <div class="gender-box">
            <h3> Gender</h3>
            <div class="gender-option"></div>

          <div class="gender" style="display: flex; justify-content:space-around;" >
            <input type="radio" id="check" name="genter"   <?php if($c=="male"){ echo "checked";} ?>
            checked style="margin-right: -30px;" value="male" require />
            <label for="check-Male">Male</label>

            <input type="radio" id="check" name="genter"   <?php if($c=="female"){ echo "checked";} ?>     
            checked style="margin-right: -30px;" value="female"require />
            <label for="check-Female">Female</label>

            <input type="radio" id="check" name="genter" <?php if($c=="other"){ echo "checked";} ?>
            checked style="margin-right: -30px;"value="other" require  />
            <label for="check-Other">Other</label>
          
          </div>
          </div>

          <div class="check-box">
            <h3> Qualification</h3>
            <div class="check-option"></div>

          <div class="Qualification" style="display: flex; justify-content:space-around;">
            <input type="checkbox"
            <?php if(in_array("ug",$b)){echo "checked";}?>
            id="check"  checked style="margin-right: -30px;" value="ug" name="qualification[]"require/>
            <label for="check-ug">Ug</label>
            <input type="checkbox"
            <?php if(in_array("pg",$b)){echo "checked";}?>
            id="check"  checked style="margin-right: -30px;" value="pg" name="qualification[]" require />
            <label for="check-pg">Pg</label>
            <input type="checkbox" 
            <?php if(in_array("other",$b)){echo "checked";}?>
            id="check"  checked style="margin-right: -30px;" value="other" name="qualification[]" require/>
            <label for="check-Other">Other</label>
          
          </div>
          </div>
          <br>
          <div class="column">
            <div class="select-box">
            <select name="country1" <?php echo $row['address'];?>>
    <option disabled="disabled" selected="selected">country</option>
    <option>India</option>
    <option>Armenia</option>
    <option>Australia</option>
    <option>Afghanistan</option>
</select>
            </div>
          </div>

          <div class="input-box">
            <label>Address</label>
            <input type="text" name="address"
            value=""
            placeholder="Enter your Address" required/>        
          </div>
            <br>
       
       <br>
      
    <button name="edit"class="button1">Edit</button></form>
   </div>




</body>
<script src="script1.js" defer></script>
</html>