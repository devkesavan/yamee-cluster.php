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
    <div class="container">
        <header>Registration form </header>
        <form action="insert.php" method="post" class="form"  enctype="multipart/form-data">
        <div class="input-box">
            <label for="Username">Username</label>
            <input type="text" name="username" class="form-control uppercase-input no-numbers-input" placeholder="Enter your name" required >
            
          
        </div>
        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email Address"id="Email" require>
            <span class="error-email" id="email-error"></span>
        </div>
        <div class="input-box">
            <label for="password">password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password"id="password"require>
            <span class="error-password" id="password-error"></span>
        </div>
          <div>
            <div class="input-box">
                <label for="phonenumber">Phonenumber</label>
                <input type="number" name="phonenumber"maxlength="10" class="form-control"placeholder="Enter your Phone number" id="Phonenumber" require >
                <span class="error-phone" id="phone-error"></span>
            </div>
            <div class="input-box">
                <label>Birth date</label>
                <input type="date"name="date" class="form-control" id="dob" name="dob" min="1980-01-01"
                max="2000-01-01" required>
            <div id="dobError" class="error-message"></div>
      
            </div>
          </div>

           <div class="gender-box">
            <h3> Gender</h3>
            <div class="gender-option"></div>

          <div class="gender" style="display: flex; justify-content:space-around;" >
            <input type="radio" id="check" name="genter" checked style="margin-right: -30px;" value="male" require />
            <label for="check-Male">Male</label>
            <input type="radio" id="check" name="genter" checked style="margin-right: -30px;" value="female"require />
            <label for="check-Female">Female</label>
            <input type="radio" id="check" name="genter" checked style="margin-right: -30px;"value="other" require  />
            <label for="check-Other">Other</label>
          
          </div>
          </div>

          <div class="check-box">
            <h3> Qualification</h3>
            <div class="check-option"></div>

          <div class="Qualification" style="display: flex; justify-content:space-around;">
            <input type="checkbox" id="check"  checked style="margin-right: -30px;" value="ug" name="qualification[]"require />
            <label for="check-ug">Ug</label>
            <input type="checkbox" id="check"  checked style="margin-right: -30px;" value="pg" name="qualification[]" require  />
            <label for="check-pg">Pg</label>
            <input type="checkbox" id="check"  checked style="margin-right: -30px;" value="other" name="qualification[]" require  />
            <label for="check-Other">Other</label>
          
          </div>
          </div>
          <br>
          <div class="column">
            <div class="select-box">
              <select name="country1">
                <option disabled="disabled" selected="selected"> Country</option>
                <option> India  </option>
                <option> Armenia</option>
                <option> Australia</option>
                <option> Armenia</option>
                <option> 
                  Afghanistan</option>
              </select>
            </div>
          </div>

          <div class="input-box">
            <label>Address</label>
            <input type="text" name="adderss" placeholder="Enter your Address"  required/>           
          </div>
            <br>
       
       <br>
      
    <button name="submit"class="button1">submit</button></form>
   </div>




</body>
<script src="script1.js" defer></script>
</html>