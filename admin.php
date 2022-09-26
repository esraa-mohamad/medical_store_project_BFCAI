<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Dental Website</title>
</head>
<body>
<div class="container" style="margin-top:50px;">
<center>

<form action="conect.php" method="post">
<div class="row mb-1 ">
              <label class="col-sm-2 col-form-label">login Name</label>  
              <div class="col-sm-3">
   <input type="text" class="form-control"   name= "user" placeholder="login name" > 
</div>
</div>
<div class="row mb-1">
              <label class="col-sm-2 col-form-label">password</label>  
              <div class="col-sm-3">
   <input type="password" class="form-control"    name= "pass" placeholder="password" > 
</div>
</div>
<div class="row mb-3" >
            <div class="offset-sm-2 col-sm-2 d-grid">
                <input type="submit" name="submit" class="btn btn-success">
                
            </div>
</form>
</div>
</center></div>

<script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
