<?php
if (isset($_POST['order'])) {
$lastname=$_post['lastname']
$firstname=$_post['firstname']
$company=$_post['company']
$address=$_post['address']
$email=$_post['email']
$phone=$_post['phone']
$check=$_post['check']
// databace connection

$con=new mysqli('localhost' , 'root' , '' ,'project');
$stmt=$con->prepare("insert into medical(firstname,lastname,company,address,email,phone,check) 
values(?,?,?,?,?,?,?)");
$stmt->bind_param('sssssss',$firstname,$lastname,$company,$address,$email,$phone,$check);
$stmt->execute();
echo " regestiration successfully..";
// $stmt->close();
// $con->close();
}
?>