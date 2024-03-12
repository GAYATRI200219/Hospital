<?php
session_start();
include "admin_function.php";
$call=vacination_view();
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
  <div class="container-fluid main_container">
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
    <div class="details">
            <div class="recent_orders">
              <div class="card_header">
                <h2>view vacination</h2>
              </div>
              <table>
                <thead>
                  <tr>
                    <td>id</td>
                    <td>fastname</td>
                    <td>lastname</td>
                    <td>email</td>
                    <td colspan="2">Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach($call as $key => $val)
                  {
                    echo "<tr>";
                    echo "<td>".++$key."</td>";
                    echo "<td>".$val['name']."</td>";
                    echo "<td>".$val['email']."</td>";
                    echo "<td>".$val['depertment']."</td>";
                    echo "<td>".$val['']."</td>";
                    echo "<td>".$val['fastname']."</td>";
                    
                   ?>               
                   <td><span><button name="edit" class="btn bg-primary  rounded-pill  text-white" ><a href="vacination_update_form.php?uid=<?php echo $val['id']; ?>"><i class="fa fa-pencil text-white"></i></a></button></span></td>
                   <td><span><button name="edit" class="btn bg-danger  rounded-pill  text-white"><a href="vacination_delete.php?uid=<?php echo $val['id']; ?>"><i class="fa fa-trash text-white"></i></a></button></span></td>
                   <?php
                   echo "</tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

          <!-- ============== new customer =============  -->
        

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
