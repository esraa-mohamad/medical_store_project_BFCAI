<?php
$servername="localhost";
$username="root";
$pass="";
$database="project";

$connection=new mysqli($servername,$username,$pass,$database);
$id="";
$firstname="";
$email="";
$phone="";
$lastname="";
$address="";
$country="";
$company="";
$errorMessage="";
$successMessage="";


if($_SERVER['REQUEST_METHOD']=='GET')
{
    if(!isset($_GET["id"])){

header("location: conect.php");
 exit;
    }
    $id=$_GET["id"];
    $sql="SELECT * FROM medical WHERE id=$id";
    $result=$connection->query($sql);
    $row=$result->fetch_assoc();
    if(!$row){
        header("location:conect.php");
        exit;
    }
   
$firstname=$row["firstname"];
$email=$row["email"];
$phone=$row["phone"];
$lastname=$row["lastname"];
$address=$row["address"];
$company=$row["company"];
$country=$row["country"];
}
else{
    $id=$_POST["id"];
    $firstname=$_POST["firstname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $lastname=$_POST["lastname"];
    $address=$_POST["address"];
    $company=$_POST["company"];
    $country=$_POST["country"];
do{
    if(empty($id) || empty($firstname)||empty($email)||empty($phone)||empty($lastname) ||empty($address) ||empty($company) ||empty($country)){

$errorMessage="All the fields are required";
break;

    }
    $sql ="UPDATE medical set id=$id , firstname='$firstname',email='$email',phone='$phone',lastname='$lastname',address='$address' 
    ,company='$company',country='$country' WHERE id='$id' ";

 $result=$connection->query($sql);
 if(!$result)  {
$errorMessage="inavalid query:".$connection->error;

break;

 } 
$successMessage="correct add";

header("location: conect.php");
 exit;
}while(true);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=0.1">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title> SRAM STORE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
if(!empty($errorMessage)){

echo"
<div class='alert alert-waring alert-dismissible fade show' role='alert'> 
   <strong>$errorMessage</strong>
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
";

}

?>
<center>
<fieldset style="border: 1px solid black; padding: 15px; width: 500px;">
                <form  method="POST" class="upform" >
                <input type="hidden"  name ="id" value ="<?php echo $id;?>">
                    <label for="" class="country">Country</label>
                    <br>
                    <select name="country"  id="country" required class="selection" value="<?php echo $country;?>">
                        <option value="Selectt">Select a countery</option>
                        <option value="Austria">Austria</option>
                        <option value="Australia">Australia</option>
                        <option value="American">American</option>
                        <option value="Azerbijan">Azerbijan</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Denimark">Denimark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican">Dominican</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                    </select>
                    <br>
                    <div class="names">
                      <div class="first">
                        <label for="" class="fname">First Name</label>
                        <input type="text" placeholder="First name" name="firstname" required class="finput" value="<?php echo $firstname;?>">
                     </div>
                     <div class="last">
                        <label for="" class="lname">Last Name</label>
                        <input type="text" placeholder="Last name" name="lastname" required value="<?php echo $lastname;?>">
                    </div>
                   </div>
                   <br>
                    <label for="">Company Name</label>
                    <br>
                    <input type="text" placeholder="Company" name="company" class="company" value="<?php echo $company;?>">
                    <br>
                    <label for="" class="address">Address</label>
                    <br>
                    <input type="text" placeholder="Address" name="address" required class="iaddress" value="<?php echo $address;?>">
                    <br>
                    <div class="emails">
                      <div class="em">
                        <label for="" class="fem">Email</label>
                        <input type="email" placeholder="Email" name="email" required class="finput" value="<?php echo $email;?>">
                     </div>
                     <div class="lphone">
                        <label for="" class="phone">Phone</label>
                        <input type="tel" placeholder="Phone num" name="phone" required value="<?php echo $phone;?>">
                    </div>
                    </div>
                    <br>
                    <?php

                    if(!empty($successMessage)){

                            echo"
                            <div class='row mb-3'>
                                <div class='offset-sm-3 col-sm-3'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'> 
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='submit'></button>
                    </div>
                    </div>
                    </div>
                    ";} ?>
                    <input type="submit" value="PLaceOrder" name="order" class="orederBu" style="width:300px">
                </form>
            </fieldset>
            </center>
</body>
</html>