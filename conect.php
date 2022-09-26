<!-- sram _ sram1234 -->
  <?php

session_start();
$connection=new mysqli('localhost','root','','loginn');
if($connection){

if(isset($_POST['submit'])){

	$username=$_POST['user'];
	$password=$_POST['pass'];
	$sql="select *from admins where user='$username' and pass='$password'";
	$query=mysqli_query($connection,$sql);
	$row=mysqli_num_rows($query);
		if($row==1){
			echo "login success";
			$_SESSION['user']=$username;
			header("location: conect.php");

	}
	else{
		echo "failed login";
		exit;
		}
	}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
   
    <title>Dental Website</title>
</head>
<body>

  <?php
		$conn=new mysqli("localhost","root","","project");  //server name,username,password,DB name
		$stmt=$conn->prepare("select * from medical");
		$stmt->execute();

		echo"<table border='1'>";
		$result=$stmt->get_result();
		while ($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['company'].
            "</td><td>".$row['phone']."</td><td>".$row['country']."</td><td><a  href='update.php?id=$row[id]'> Update</a></td><td>
            <a  href='delete.php?id=$row[id]'> delete</a></td></tr>";
		}

		echo"</table>";
	?>

<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>