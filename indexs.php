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
    <div class="container">
        <header>Login</header>
        <form action="userdetails.php" method="post" enctype="multipart/form-data" class="form">
        <div class="input-box">
        <label for="Username">Username</label>
            <input type="text" class="form-control uppercase-input no-numbers-input" placeholder="Enter your name" required/>
            
        </div>
        <div class="input-box">
        <label for="password">password</label>
            <input type="password"  class="form-control" placeholder="Enter your password" require/>
        </div>
        <br>
        <br>
        <br>
     
    <button class="button1">Login</button>
    </form>
    <a href="reset.php" style=color:white;><p >Forgot password?</p>
    </div>
   
</body>
</html>