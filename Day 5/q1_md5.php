Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@prasad2200 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


ChinmayMhatre
/
phpmysqlworkshopiitb_chinmaymhatre
1
00
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
phpmysqlworkshopiitb_chinmaymhatre/day5/q1_md5.php /
@ChinmayMhatre
ChinmayMhatre day5
Latest commit 337a410 4 hours ago
 History
 1 contributor
44 lines (36 sloc)  828 Bytes
  
<!DOCTYPE html>
<html>
<head>
	<title>md5</title>
</head>
<body>
<form action="" method="POST">
	<p>
		Username: 
		<input type="text" name="username"><br>
	</p>
	<p>
		Password: 
		<input type="password" name="password"><br>
	</p>
	<input type="submit" name="submit"><br>
<?php 
$con = mysqli_connect("localhost","root","","result");


if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$username = $_POST['username'];
$password = $_POST['password'];
$passwordenc = md5($password);

$sql="INSERT INTO data1 (username, password) VALUES ('$username', '$passwordenc')";

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 

mysqli_close($con);

?>
</form>
</body>
</html>
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
