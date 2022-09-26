<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];

$con=new mysqli("localhost","root","","project");

$sql="DELETE FROM medical WHERE id=$id";
$con->query($sql);
echo"deleting done";

}
header("location:conect.php");
 exit;
?>