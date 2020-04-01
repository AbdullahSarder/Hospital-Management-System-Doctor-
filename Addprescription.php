<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Prescption</title>
	.error {color: #FF0000;}
	<link rel="stylesheet" href="Presceptionstyle.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>
<body>
<!----------------------------PHP FIILE--------------------- -->
<?php
// define variables and set to empty values
$PatientIDErr=$deptErr =$doctorErr= $emailErr = $dateErr= "";
$PatientID = $dept=$doctorErr=$email = $dateErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//PatientID----//
  if (empty($_POST["PatientID"])) {
    $PatientIDErr = "Name is required";
  } else {
    $PatientID = test_input($_POST["PatientID"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$PatientID)) {
      $PatientIDErr = "Only letters and white space allowed";
    }
  }
  //PatientID----//
  	//Department----//
 if (empty($_POST["dept"])) {
    $deptErr = "Select Department";
  } else {
    $dept = test_input($_POST["dept"]);
  }
  //department----//
    	//Doctor Name----//
 if (empty($_POST["doctor"])) {
    $doctorErr = "Select Doctor";
  } else {
    $doctor = test_input($_POST["doctor"]);
  }
	//Doctor Name----//
	
	    	//Date----//
 if (empty($_POST["date"])) {
    $dateErr = "Select Date";
  } else {
    $date = test_input($_POST["date"]);
  }
	//Date----//
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!----------------------------PHP FIILE--------------------- -->
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        <img src="american_international_hospital.png" alt="profile_pic"  style="width:150px;height:80px;">
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">
               <div class="dd_item">Profile</div>
               <div class="dd_item">Change Password</div>
               <div class="dd_item">Logout</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>  
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
                <img src="doc-removebg-preview (1).png" alt="profile_pic">
              </div>
              <div class="profile_info">
                 <p>Welcome</p>
                 <p class="profile_name">Doctor Profile</p>
              </div>
            </div>
            <ul>
              <li class="item">  <!-- class =item is my edit for all li-->
                <a href="Doctorhome.html" >
                  <span class="icon"> <img src="Blueprint.jpg" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="title">Dashboard</span>
                </a>
              </li>
			  <!--                Patient              -->
			<li  class="item" id='Patient'>
                <a href="#">
                  <span class="icon"> <img src="01-1Patient-512.png" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="btn">Patient</span>
                </a>
				  
				   <div class="submenu">
				    <a href="#">Add Patient</a>
					 <a href="#">Patient List</a>
					  <a href="#">Add Document</a>
					   <a href="#">Document List</a>
				   </div>
              </li>
			 <!--                   Appoinment                -->
			 
			 
			  <!--                Schedule              -->
			  <li class="item">
                <a href="#">
                  <span class="icon"> <img src=" schedule.png" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="title">Schedule</span>
                </a>
              </li>
			  <!--                Schedule              -->
            <!--                Appoinment               -->
			<li  class="item" id='Appoinment'>
                <a href="#Appoinment">
                  <span class="icon"> <img src="appoinment.png" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="btn">Appoinment</span>
                </a>
				   
				   <div class="submenu">
				    <a href="#" >>Add Appoinment</a>
					 <a href="#">Appoinment List</a>
					  <a href="#">Assign to Me</a>
					   <a href="#">Assign by Me</a>
				   </div>
              </li>
			 <!--                   Appoinment                -->
			 
			  <!--               Prescription              -->
			<li  class="item" id='Prescription'>
                <a href="#Prescription ">
                  <span class="icon"> <img src="1590116.png" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="btn">Prescription</span>
                </a>
				   
				   <div class="submenu">
				    <a href="http://localhost:82/Addprescription.php#" class="active">Add Prescription </a>
					<a href="#">Prescription List</a>
					<a href="#">Add Patient Case Study</a>
					<a href="#">Patient Case Study List</a>
				   </div>
              </li>
			 <!--                Prescription                -->
			 
			 
			   <!--               Notice             -->
		 <li>
                <a href="#Notice">
                 <span class="icon"> <img src=" schedule.png" alt="profile_pic"  style="width:30px;height:30px;"></span>
                  <span class="title">Notice</span>
                </a>
              </li>
			 <!--                Notice               -->
            </ul>
          </div>
      </div>
	  <!---------- Main Bodu Code Start -->
	   <div class="container">
    <div class="testbox">
      <form action="/">
        <div class="banner">
        </div>
		<!--Personal Info-->
		<fieldset>
		<legend>Personal Info</legend>
        <div class="item">
          <div class="name-item">
            <input type="text" name="Patient" placeholder="Patient ID"/>
            <input type="text" name="name" placeholder="Patient Name"/>
          </div>
        
        <div class="name-item">
            <input type="text" name="sex" placeholder="Sex"/>
            <input type="text" name="weight" placeholder="Weight"/>
          </div>
		 <div class="name-item">
            <input type="text" name="dob" placeholder="Date of Birth"/>
            <input type="text" name="name" placeholder="Blood Pressure"/>
          </div>  
		  
        </div>
		</fieldset>
			<!--Personal Info-->
			
			<!-- Medecine Name-->
			   <div class="itemA">
          <div class="name-itemA">
            <input type="text" id="ca1" name="Patient" placeholder="Medicine Name"/>
            <input type="text" id="ca2" name="name" placeholder="Instruction"/>
			<input type="text" id="ca3" name="name" placeholder="Days"/>
			<button id="ca4">ADD</button>
          </div>
		  
        </div>
		<!--AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA -->
     <input type="submit" name="submit" value="Submit">  

      </form>
    </div>
	    <!---------- Main Body Code End -->
		<!---------- Footer -->
		
		<!---------- Footer -->
       </div>
  
</div>	

</body>
</html>