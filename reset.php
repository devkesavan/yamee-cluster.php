<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
    <link rel="stylesheet" href="css/style.css">
	
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



               

<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']); // Sanitize user input to prevent SQL injection
    $sqli = "SELECT * FROM `register1` WHERE username='$username'";
    $result = mysqli_query($conn, $sqli);
    
    if ($result) {
        $row = mysqli_fetch_array($result);
        if ($row) {
            $display_username = htmlspecialchars($row[0]); // Escape and sanitize displayed data
            $display_password = htmlspecialchars($row[2]); // Escape and sanitize displayed data
            
            // Avoid displaying the password directly on the page
            $password_message = "Password retrieval is not supported on this platform.";
        } else {
            $error_message = "User not found.";
        }
    } else {
        $error_message = "Database query failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password Retrieval</title>
    <link rel="stylesheet" href="css/style.css">


    <div class="container">
        <form method="post">
            <header><center>Forgot password</center></header><br><br><br>
			<div class="input-box">
            <label  for="username">Enter Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <button type="submit">Reset</button><br><br>
            <?php if (isset($error_message)) { ?>
                <p><?php echo $error_message; ?></p>
            <?php } ?>
            <?php if (isset($display_username)) { ?>
                <p>USERNAME: <?php echo $display_username; ?></p>
                <p>PASSWORD: <?php echo $display_password; ?></p>
                <p><?php echo $password_message; ?></p>
            <?php } ?>
        </form>
			</div>
    </div>
</body>
</html>


  
 