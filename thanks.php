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
    <title>Thanks</title>
</head>
<body>
<?php
if (isset($_POST['order'])) {
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$company=$_POST['company'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
// databace connection

$con=new mysqli('localhost' , 'root' , '' ,'project');
$stmt=$con->prepare('insert into medical(firstname,lastname,company,address,email,phone,country) 
value(?,?,?,?,?,?,?)');
$stmt->bind_param('sssssss',$firstname,$lastname,$company,$address,$email,$phone,$country);
$stmt->execute();
// $stmt->close();
// $con->close();
}
?>
    <!-- start of header -->
  <header>
    <div class="all1" id="home"
        style="background-image: url(img/medical-2.jpg);  height: 100vh; background-size: cover;background-repeat: no-repeat;">
        <div class="over">
            <div class="row">
                <div class="container">
                    <div class="all">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="col-lg-4">
                                <div class="tsaa">
                                    <a class="navbar-brand" style="color: white; font-size:30px; font-weight:700;"
                                        href="#">SRAM STORE</a><i class="fa-solid fa-stethoscope"
                                        style="color: #fff;"></i>
                                    <button class="navbar-toggler" style="color:rgb(70, 116, 196) ;" type="button"
                                        data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon" id="navicon"></span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-8">

                                <div class="collapse navbar-collapse" style="margin-left: 50px;"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" style="color: white;" href="#">Home <span
                                                    class="sr-only" style="color: white;">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" style="color: white;" href="#">Produts</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link " style="color: white;" href="#">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " style="color: white;" href="#">Contact us</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </nav>
                    </div>


                    <section class="firstsec">
                        <div class="row">
                            <div class="container ">
                                <div class="col-lg-12">
                                    <div class="home-text">
                                        <h1 style="text-align: center; color:#fff;padding-top:100px;">World's Biggest
                                            Medical Store</h1>
                                        <p style="text-align: center; color:#fff;padding-top:10px;">This is the biggest
                                            site to buy <em> Medical Devices</em> <br> you can find all medical devices
                                            you need.
                                        </p>
                                        <button class="button-63" role="button">visit us!</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                </div>
            </div>
        </div>
    </div>

    </header>
  <!-- end of header  -->

  <!-- thank section -->

  <section class="thanks">
    <i class="fa-solid fa-circle-check"></i>
       <h1>Thank you!</h1>
       <p>You order was successfuly completed</p>
       <a href="index.html">
       <button>BACK TO Home</button>
      </a>
   </section>

    <!-- end of thank -->

   <!--  start footer  -->
   <footer class="footer" style="padding-top: 70px; padding-bottom: 50px; border-radius: 0px 50px 0px 50px;">
    <div class="container">
        <div class="row">
           <div class="col-md-4">
    <div class="left_footer">
        <details>
            <summary style="padding-bottom: 20px;">
                What is SRAM Store ?
            </summary>
            <p>
                A store that sells the latest modern medical devices and delivers them to any place
                ... and the devices are equipped and safe for the latest modern medical developments
            </p>
        </details>
        <details>
            <summary style="padding-bottom: 20px;">
                How Medical Devices Are Made?
            </summary>
            <p>
                The devices available today have taken an average of 12 years to develop. With
                dedication, creativity, and science, we can significantly cut that time.
            </p>
        </details>
        <details>
            <summary>
                About Products ?
            </summary>
            <p>
                Each product is the result of 1,500 scientists who supervised more than 500,000
                device lab tests and more than 36 clinical trials before first use to manufacture
                safe devices.
            </p>
        </details>
    </div>
</div>

<div class="col-md-3">
    <div class="middle_footer">
        <h5 style="font-weight:700;color:#2b5099"> SRAM STORE</h5>
        <img src="img/1554821799398.jpg" style="border-radius: 15px; box-shadow: 5px 10px 18px #888888;" alt="medical" width="200px" height="200px">
    </div>
    </div>

    <div class="col-md-5">
        <div class="right_footer" style="width:100%">
            <h2 style="padding-bottom:10px;"> Contact Info </h2>
            <div class="contact">
                <ul>
                    <li>
                        <i style="color: rgb(35, 88, 153);" class="fa-solid fa-location-dot"></i>
                        <p>Cairo SRAM Store</p>
                    </li>
                    <li>
                        <i style="color: rgb(35, 88, 153);" class="fa-solid fa-phone"></i>
                        <p> +02 01012467440 - 01200462973 - 01092305992</p>
                    </li>
                    <li>
                        <i style="color: rgb(35, 88, 153);" class="fa-solid fa-envelope"></i>
                        <p> esoodawood186@gmail.com </p>
                        <p> m.hamza1533@gmail.com </p>
                        <p>rodinaibrahim434@gmail.com </p>
                    </li>
                </ul>
            </div>
            <div class="email">
                <h2>
                    Subscribe
                </h2>
                <input type="email" placeholder="Email">
                <input style="background-color: rgb(123, 160, 228); color:white;border: unset; padding-bottom: 4px;" type="submit" value="Send" name="Send">
            </div>
            </div>
        </div>
   
</div>
</div>

</footer>
<p style="text-align: center;">
    Copyright &#169; 2022 All rights reserved | This template is made with <i class="fa-solid fa-heart"></i> by
    <span style="color: purple;"> SRAM STORE </span>
</p>
<!-- ده في نهاية الصفحة وتاخد لون باك  الفوتر وميكونش في فرق بينهم  -->

<!-- end footter -->
</body>
</html>