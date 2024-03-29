<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Intern system</title>
	<link rel="stylesheet" type="text/css" href="css1\bootstrap.min.css">
  <style type="text/css">
    body{
      background-color: black;
      color: white;
      font-family: 'Raleway', sans-serif;
      letter-spacing: 0.06em;
    }

    .container{
      background-color: black;
      text-align: center;
    }
	.btn{
    display: flex;
  justify-content: center;
  align-items: center;
	border:none;
	background: #fff;
	letter-spacing: 0.25em;
	font-weight: 700;
	font-size: 20px;
	text-transform: uppercase;
	color: #111;
	padding: 15px 25px;
	transition:all 0.3s linear;

	}
    .btn:hover{
        background: rgba(255,0,0,0.7);
        color: white;
    }
  </style>
	<script src="js1\bootstrap.min.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container">
	 <div class="container">
	   <h1 style="color:white;font-style:bold,italic"><span style="font-size:60px;font-family:'Brush Script MT', cursive">Registration Form</span></h1>
	 </div>
</div>
<br>
<br>
<div class="container">
  <form class=" form-horizontal" action="registration.php" method="post">
    <fieldset>
      <div class="form-group">
        <label class="col-md-4 control-label">Name</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="name" placeholder="Enter Your Name" class="form-control"  type="text" required="1" title="only contain letters">
            </div>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" >Email</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group ">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="example@gmail.com" class="form-control"  type="email" required="1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="charactor followed by an '@' sign, followed by more charactor and than '.' sign and at least 2 charactor">
            </div>
          </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" >Contact NO.</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="contact" placeholder="Ex. 95XXXXXXXX" class="form-control"  type="text" maxlength="10" pattern="[0-9]{10}" required="1" title="only contain numbers">
            </div>
          </div>
      </div>
      <div class="form-group"> 
        <label class="col-md-4 control-label">Degree</label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
	             <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                  <select name="degree" class="form-control selectpicker">
                    <option>Select your Degree</option>
                    <option value='B.E(CSE)'>B.E(CSE)</option>
                    <option  value='B.E(IT)'>B.E(IT)</option>
                    <option  value='B.E(ECE)' >B.E(ECE)</option>
                    <option  value='B.E(AI&DS)'>B.E(AI&DS)</option>
                    <option  value='B.E(CIVIL)'>B.E(CIVIL)</option>
                    <option  value='B.E(EEE)'>B.E(EEE)</option>
                  </select>
            </div>
          </div>
        </div>
      <div class="form-group">
        <label class="col-md-4 control-label">University Name</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
                <input  name="collage" placeholder="Enter College Name" class="form-control"  type="text" required="1" pattern="[A-Za-z]{}" title="only contain letters">
            </div>
          </div>
      </div>
      <div class="form-group"> 
        <label class="col-md-4 control-label">Duration</label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="duration" class="form-control selectpicker" required="1">
                  <option value="">Select Duration</option>
                  <option value="2 Week">2 Week</option>
                  <option value="4 Week">4 Week</option>
                  <option value="6 Week">6 Week</option>
                  <option value="8 Week">8 Week</option>
                  <option value="12 Week">12 Week</option>
                </select>
            </div>
        </div>
      </div>
      <div class="form-group"> 
        <label class="col-md-4 control-label">Technology Used</label>
          <div class="col-md-4 selectContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                <select name="technology" class="form-control selectpicker" required="1">
                  <option value="">Select Technology</option>
                  <option value="PHP">PHP</option>
                  <option value=".net">.net</option>
                  <option value="Android">Android</option>
                  <option value="Java">Java</option>
                  <option value="Python">Python</option>
                  <option value="IOT">IOT</option>
                  <option value="Cyber Security">Cyber Security </option>
                  <option value="Blockchain">Blockchain</option>
				  <option value="Cloud Computing">Cloud Computing</option>
				  <option value="App development">App Development</option>
				  <option value="Artificial Intelligence">Artificial Intelligence</option>
				  <option value="Web Development">Web Development</option>
                </select>
            </div>
          </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Company </label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="guide" placeholder="Enter Company Name" class="form-control"  type="text" required="1" title="only contain letters">
            </div>
          </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Join Date</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input  name="date"  class="form-control "  type="date" required="1">
            </div>
          </div>
      </div> <br>
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name='submit' value='submit' class="btn">
        </div>
  </div>
    </fieldset>
  </form>
</div>
</body>
</html> 
<?php
include('connection.php');
if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
		 	$contact=$_POST['contact'];
			$degree=$_POST['degree'];
			$collage=$_POST['collage'];
			$dur=$_POST["duration"];
			$tech=$_POST["technology"];
			$guide=$_POST["guide"];
			$date=$_POST["date"];
			if ($name=='' || $email=='' || $contact=='' || $degree=='' || $collage=='' || $dur=='' || $tech=='' || $guide=='' || $date=='' ) {
				echo "<script>alert('please fill all field');<script>";
			}		
			else{
				$que = "INSERT INTO u_reg (u_name,u_email,u_contact,u_degree,u_college,u_dur,u_tech,u_com,u_jdate) VALUES('$name','$email','$contact','$degree','$collage','$dur','$tech','$guide','$date')";

				$query=mysqli_query($conn,$que);
				if($query)
				{	

					$reg="SELECT u_id FROM u_reg WHERE u_name LIKE '$name'and u_email LIKE '$email'and u_contact LIKE '$contact'and u_degree LIKE '$degree'and u_college LIKE '$collage' and u_dur LIKE '$dur' and u_tech LIKE '$tech' and u_com LIKE '$guide' and u_jdate LIKE '$date'   ";

					$query1=mysqli_query($conn,$reg);

					while($run=mysqli_fetch_array($query1))
					{
						$u_id=$run[0];
						echo "<script>window.alert('Registration no is: $u_id')</script>";
					}
				}
				else{
					echo "Registration Failed";
				}
			}
	}
?> 