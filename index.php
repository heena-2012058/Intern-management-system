<!DOCTYPE html>
<html>
<head>
 <title>Main Page</title>

 <link rel="stylesheet" href="css/bootstrap.min.css">
 
 <link rel="stylesheet" href="fonts/Oswald/Oswald.ttf">
 <link rel="stylesheet" href="fonts/Pacifico/Pacifico-Regular.ttf">
 <link rel="stylesheet" href="fonts/Oswald/Oswald.ttf">
 <script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

 <link rel="stylesheet"  href="index1.css">

</head>
<body>

<div class="container-fluid text-white">

 <nav class="row py-4">
  <div class="col-lg-9 col-md-9 col-12  logo">
   <h1 style="color:white;font-style:bold,italic"><span style="font-size:60px;font-family:'Brush Script MT', cursive">Internship Management System</span></h1><br>
   

 </nav>

 
  
 <div class="row main-content ">
  <div class="col-md-9 col-12 leftside"> </div>

   <div class="col-md-3 col-12 rightside d-flex justify-content-center align-items-center">
   <div class="right-content w-50 ">
   <h1 style="font-size:45px;font-style:italic">LOGIN</h1>
   <button onclick="openForm()">STAFF</button>
   <a href="registration.php"><button>STUDENT</button></a>

  <div class="form-group form-popup" id="myForm">
    <form action="login.php" class="form-container" method="post">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input class="form-control" type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>

    <input type="submit" class="btn" name="login" value="Login">
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
    </form>
  </div>
  
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
</script>

  </div>
  </div>
 </div>
</div>

</body>

</html>

