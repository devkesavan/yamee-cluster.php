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
 include ("config.php");

$show="SELECT* FROM register1";
$result1=mysqli_query($conn,$show);


echo "<table table width='100%'>";
echo "<tr>";
echo "<th>email</th><th>name</th><th>password</th><th>phonenumber</th><th>date</th><th>genter</th><th>qualification</th><th>address</th><th>EDIT</th><th>DELETE</th>";
echo "</tr>";
$row_num=mysqli_num_rows($result1);
$a=$row_num/5;
$a=ceil($a);
if(!isset($_GET['page']))
{
    $page=1;
}
else
{
    $page=$_GET['page'];
}
$page1=($page-1)*10;

$show="SELECT* FROM register1 LIMIT $page1,10";
$result=mysqli_query($conn,$show);

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[5] . "</td>";
        echo "<td>" . $row[7] . "</td>";
        echo "<td>" . $row[8] . "</td>";
       
  
        
        
        echo "<td><a href='edit.php?mes=$row[0]'>EDIT</a></td>";
        echo "<td><a href='delete.php?mes=$row[0]'>DELETE</a></td>";

        echo "</tr>";
        $row_num--;

    }

echo "<center>";
for($b=1;$b<=$a;$b++)
{
    echo "<a id='page' href='admin.php?page=$b'>$b </a>";
}
echo "</table>";
echo "</center>";


?>




	<a href="indexs.php"><button class="button1">Logout</button>








    </div>
   
</body>
</html>