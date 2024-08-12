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

    <section>
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
  </style>

  
  <div class="container">
        <header>Login</header>
        <form action="admin.php" method="post" enctype="multipart/form-data"class="form">
        <div class="input-box">
        <label for="Username">Username</label>
            <input type="text" class="form-control uppercase-input no-numbers-input" placeholder="Enter your name" required id="Username" >
            
        </div>
        <div class="input-box">
        <label for="password">password</label>
            <input type="password"  class="form-control" placeholder="Enter your password"id="password">
        </div>
         
        <button class="button1">Login</button>
  </form>
    </div>
   


        </div>
      </div>
      
    </div>
  </div>

</section>
   
</body>
</html>