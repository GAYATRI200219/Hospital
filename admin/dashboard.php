<?php
session_start();
include "admin_function.php";
$call=admin();
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
            <span class="title h3">Medinova</span>
          </a>
        </li>
        <div class="profile-img ml-5">
          <img src="../assects/img/blog-3.jpg " width="100px" alt=""  >
          <h5 class=" text-light "> gayatri
          </h5>
        </div>
        <li>
          <a href="registration.php" class="mt-4">
            <span class="icon ml-1"><i class="fa fa-briefcase"></i></span>
            <span class="title">User</span>
          </a>
        </li>
        
        
        

         <li>
          <a href="#">
            <span class="icon"><i class="fa fa-medkit"></i></span>
            <span class="title">vaccination</span>
          </a>
        </li>

         <li>
          <a href="registration.php">
            <span class="icon"><i class="fa fa-wheelchair"></i></span>
            <span class="title">patients</span>
          </a>
        </li>

         <li>
          <a href="apportment_insert.php">
            <span class="icon"><i class="fa fa-address-card-o"></i></span>
            <span class="title">Apportment</span>
          </a>
        </li>

        <li>
          <a href="admin_signout.php">
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
      <div class="cardbox">

          <a href="apportment_insert.php" style="text-decoration: none;">
          

          <div class="card2">
            <div>
              <div class="numbers"><?php echo user_count(); ?></div>
              <div class="cardname">user</div>
            </div>
            <div class="iconbox">
            <i class="fa fa-book"></i>         
            </div>
          </div>
          </a>

          <a href="vacination_vew_insert.php" style="text-decoration: none;"><div class="card2">
            <div>
              <div class="numbers"><?php echo vacsination_count(); ?></div>
              <div class="cardname">vacsination</div>
            </div>
            <div class="iconbox">
            <i class="fa fa-medkit"></i>
              
            </div>
          </div></a>

          <a href="" style="text-decoration: none;"><div class="card2">
            <div>
              <div class="numbers">7504</div>
              <div class="cardname">doctor</div>
            </div>
            <div class="iconbox">
            <i class="fa fa-user-md"></i>
              
            </div>
          </div>
        </a>

          <a href="apportment_insert.php" style="text-decoration: none;"><div class="card2">
            <div>
              <div class="numbers">7504</div>
              <div class="cardname">patients</div>
            </div>
            <div class="iconbox">
            <i class="fa fa-wheelchair"></i>
              
            </div>
          </div>
        </a>

          <a href="apportment_insert.php" style="text-decoration: none;">
          <div class="card2">
            <div>
              <div class="numbers"><?php echo user_count(); ?></div>
              <div class="cardname">apportment</div>
            </div>
            <div class="iconbox">
            <i class="fa fa-address-card-o"></i>
              
            </div>
          </div>
          </a>
          </div>




          <!-- ==============boooking details============  -->
          <div class="details">
            <div class="recent_orders">
              <div class="card_header">
                <h2>All User</h2>
                <a href="#">View All</a>
              </div>
              <table>
                <thead>
                  <tr>
                    <td>id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>phone</td>
                    <td>image</td>
                    <td >update</td>
                    <td >delete</td>

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
                    echo "<td>".$val['phone']."</td>";

                    

                   ?>
                   <td><img src=" <?php echo '../assects/img/'.$val['image'];?>" width="50px" height="50px" class="rounded-pill" ></td>
              
                   <td><span><button name="edit" class="btn bg-primary  rounded-pill  text-white" ><a href="#?uid=<?php echo $val['id']; ?>"><i class="fa fa-pencil text-white"></i></a></button></span></td>
                   <td><span><button name="edit" class="btn bg-danger  rounded-pill  text-white"><a href="dashboard.php?uid=<?php echo $val['id']; ?>"><i class="fa fa-trash text-white"></i></a></button></span></td>
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