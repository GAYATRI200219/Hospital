<?php 
include "admin_function.php";
$id=$_GET['uid'];
?> 
<!DOCTYPE html>
<html>
<head>
  <title>dashboard</title>
  <link rel="stylesheet" href="../assects/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assects/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="../assects/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
  <!-- ===========================navgation=========================  -->
  <div class="container-fluid main_container ">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="icon"><img src="../assects/img/hospital-logo1.webp" style="width: 50px;height: 50px;"></span>
            <span class="title h3">Spice</span>
          </a>
        </li>
        <div class="profile-img ml-5">
          <img src="../assects/img/blog-3.jpg " width="100px" alt=""  >
          <h5 class=" text-light "> gayatri
          </h5>
        </div>
        <li>
          <a href="#" class="mt-4">
            <span class="icon ml-1"><i class="fa fa-briefcase"></i></span>
            <span class="title">User</span>
          </a>
        </li>
        
        
        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-facebook"></i></span>
            <span class="title">Enquires</span>
          </a>
        </li>

         <li>
          <a href="#">
            <span class="icon"><i class="fa fa-medkit"></i></span>
            <span class="title">vaccination</span>
          </a>
        </li>

         <li>
          <a href="#">
            <span class="icon"><i class="fa fa-wheelchair"></i></span>
            <span class="title">patients</span>
          </a>
        </li>

         <li>
          <a href="#">
            <span class="icon"><i class="fa fa-address-card-o"></i></span>
            <span class="title">Apportment</span>
          </a>
        </li>


        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-dollar"></i></span>
            <span class="title">Total Package</span>
          </a>
        </li>

        <li>
          <a href="#">
            <span class="icon"><i class="fa fa-dollar"></i></span>
            <span class="title">Issues Riaised</span>
          </a>
        </li>
        <li>
          <a href="../logout.php">
            <span class="icon"><i class="fa fa-sign-out"></i></span>
            <span class="title" >Sign Out</span>
          </a>
        </li>
        
        
      </ul>
      
  </div>
  <div class="main2">
        <div class="topbar">
          <div class="toggle">
            <i class="fa fa-bars"></i>
          </div>
          <div class="search">
            <label>
              <input type="text" placeholder="Search Here">
              <i class="fa fa-search"></i>
            </label>
          </div> 
          <div class="user">
          <img src="../assects/img/blog-2.jpg  " alt=""  >
          </div>
        </div>



        <!-- ====================cards======================  -->
   <?php
	$fname="";	
	$call=vacinationupdateselect($id); 
	foreach ($call as $key => $value) 
	{
		$fname=$value['fastname'];
		$lname=$value['lastname'];
		$email=$value['email'];
		}
	?>
	
    <div class="row px-4 mt-3 ">
            <div class="col-md-12 main_form pb-5">
            	<h4 class=" p-2 text-center">vacination Edit</h4>
                <div class="row">          
                    <div class="col-md-6 mt-3 mx-auto">
                    <form action="vacination_update_form_action.php" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-md-12 form-group ">
                                <input type="hidden" class="form-control " name="u_id" value="<?php if($id!=""){echo $id;}?>">
                                </div>

                                <div class="col-md-12 form-group">
                                <input type="text" class="form-control " name="f_name" value="<?php if($fname!=""){echo $fname;}?>">
                                </div>

                                <div class="col-md-12 form-group">
                                <input type="text" class="form-control " name="l_name" value="<?php if($lname!=""){echo $lname;}?>">
                                </div>

                                <div class="col-md-12 form-group">
                                <input type="email" class="form-control" name="email" value="<?php if($email!=""){echo $email;}?>">
                                </div>                                

                                <div class="mx-auto mt-4">
                                <button class="btn btn-info font-weight-bold px-4 py-2" Type="submit" name="submit">CHANGE</button>
          
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


  <!-- ==============================scriptjs===============  -->

  <script src="js/dashboard.js"></script>
  <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} 
  </script>

</body>
</html>