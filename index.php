<?php
include 'header.php';
?>
<section>
  <div class="container-fluid p-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">    
  <div class="carousel-inner">
    <?php 
      $alldata=getAllSlider();
      if(!empty($alldata))
      {

        foreach ($alldata as $key => $slider_item) { 
      ?>
    <div class="carousel-item <?php echo $key==0?'active':''; ?> " >
        
        <div class="d-block w-100 main1" style="background-image: url('<?php echo 'assects/slider/'.$slider_item['image'];  ?>');">
        <div class="ma">
        <h5 class="b"><?php echo $slider_item['subtitle']; ?></h5>  
        <h1 class="text-light"><?php echo $slider_item['title']; ?></h1> 

        <div class="pt-2"><a href="#" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
         <a href="#" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
       </div>
         </div>
       </div>
    </div>

<?php  
}
}
?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> 
</div>
</div>
</section>

<!-- 2nd part-->
<section>
  <div class="container-fluid py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5" style="min-height:500px;">
        <div class="position-relative h-100"><img src="assects/img/ot.jpg" alt=" " class="position-absolute w-100 h-100 rounded" ></div>
      </div>
      <div class="col-md-7">
        <div class="mb-4">
          <h5 class=" c1 b">ABOUT US</h5>
          <h1 class="display-4 c2"><b>Best Medical Care For Yourself and Your Family</b></h1>
        </div>
        <p class="text-secondary">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
        <div class="row g-3 pt-3">
          <div class="col-md-3 mb-3">
            <div class="bg-light text-center rounded-circle py-4 "><i class="fa fa-user-md  c3 " aria-hidden="true"></i>
              <h6 class="mb-0 c2">Qualified<small class="d-block c3">Doctors</small></h6>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="bg-light text-center rounded-circle py-4"><i class="fa fa-bed  c3" aria-hidden="true"></i>
              <h6 class="mb-0 c2">Emergency<small class="d-block c3">Services</small></h6>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="bg-light text-center rounded-circle py-4"><i class="fa fa-stethoscope c3" aria-hidden="true"></i>
              <h6 class="mb-0 c2">Accurate<small class="d-block c3">Testing</small></h6>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="bg-light text-center rounded-circle py-4"><i class="fa fa-ambulance c3"></i>
              <h6 class="mb-0 c2">Free<small class="d-block c3">Ambulance</small></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<section>
  <div class="container section_7_main_container mt-5 text-center">
      <h5 class="d-inline-block c3 text-uppercase border-bottom border-5 ">MEDICAL PACKAGES</h5>
      <h1 class="text-dark">Awesome Medical Programs</h1>

  <div class="company_carousel_main  owl-carousel section_7_carasule_container">
          <!-- first -->
          <?php
          $alldata=getAllOwl2();
      if(!empty($alldata))
      {
        foreach($alldata as $owl2_item) { 
      ?>
       
              <div class="col-md-12 company_carousel_card p-0 caruse_border_rad" >
                  <div class="col-md-12 mx-auto shadow p-0 caruse_border_rad1" style="background-image: url(<?php echo 'assects/img/'.$owl2_item['image'];?>);height: 200px;opacity: 0.9;background-blend-mode: multiply;background-color:rgba(29, 42, 77, .8);">
                          <h4 class="text-light"><?php echo $owl2_item['title']; ?></h4>
                        
                         <h1 class="display-4 text-white mb-0"><small class="align-top " style="font-size:22px;line-height:45px;">$</small>99<small class="align-bottom font-bold " style="font-size:16px;line-height:40px;font-weight: 500;">/ Year</small>
                          </h1>
                        </div>
                        <div class="text-center py-5 ">
          <p><?php echo $owl2_item['description']; ?></p>
         
          <a href="#" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
        </div>
      </div>
      <?php
    }
  }
      ?>
  </div>
</div>
</div>
</section>
   

<section>
  <div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5" style="max-width:500px;">
      <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
      <h1 class="display-4">Excellent Medical Services</h1>
    </div>
    <div class="row ">
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4">
        <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-user-md text-white"></i></div>
          <h4 class="mb-3">Emergency Care</h4>
          <p>Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <div class="right_arrow_div"><a class=" rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right "></i></a></div></div>
      </div>
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-bed text-white"></i></div>
          <h4 class="mb-3">Operation & Surgery</h4>
          <p class="text-center">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <a class=" rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right"></i></a></div>
      </div>
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4">
        <div class="service-item  rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-stethoscope text-white"></i></div>
          <h4 class="mb-3">Outdoor Checkup</h4>
          <p>Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <a class=" rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right"></i></a></div>
      </div>
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-ambulance text-white"></i></div>
          <h4 class="mb-3">Ambulance Service</h4>
          <p>Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <a class="rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right"></i></a></div>
      </div>
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-heartbeat text-white"></i></div>
          <h4 class="mb-3">Medicine &amp; Pharmacy</h4>
          <p>Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <a class=" rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 mt-5 col-sm-6 col-lg-4 ">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
          <div class="service-icon mb-4 mt-5"><i class="fa fa-heartbeat text-white"></i></div>
          <h4 class="mb-3">Medicine &amp; Pharmacy</h4>
          <p>Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
          <a class=" rounded-pill right-arrow" href="#"><i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section>
  <div class="container-fluid c py-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 mt-5">
        <div class="mb-4">
          <h5 class="b text-light"><b>APPOINTMENT</b></h5>
          <h1>Make An Appointment For Your Family</h1>
        </div>
        <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
        <a class="btn btn-dark rounded-pill py-3 px-5" href="#">Find Doctor</a>
         <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="#">Read More</a>
      </div>
      <div class="col-md-6 mt-5">
        <div class="bg-white text-center rounded p-5">
          <h1 class="mb-4">Book An Appointment</h1>
          <form action="apportment_action.php" method="Post">
           <div class="row">
    <div class="col-md-6  mt-3 ">
  <input type="text" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="  Fast Name" name="Firstname">    </div>
    <div class="col-md-6  mt-3">
 <input type="text" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="Last Name" name="Lastname">    </div>
  </div>
<div class="row">
    <div class="col-md-6  mt-3">
  <input type="email" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="Your Email" name="email">    </div>
    <div class="col-md-6  mt-3">
 <input type="text" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="Phone no" name="phone">    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3">
 <input type="date" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="Date" name="date">    </div>
    <div class="col-md-6 mt-3">
 <input type="time" class="form-control form-control-lg bg-light border-0" id="colFormLabelLg" placeholder="Time" name="time">    </div>
</div>
 <div class="col-md-12 mt-4">
                <button class="btn btn-primary w-100 py-3" type="submit" name="submit">Make An Appointment</button>
              </div>
</form>
</div>
</div>


          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</section>


<section>
  <div class="container section_7_main_container mt-5">
  <div class="company_carousel_main owl-carousel section_7_carasule_container">
          <!-- first -->

                <?php
          $alldata=getAllOwl();
          if(!empty($alldata))
          {
            foreach ($alldata as $key => $owl_item) {
              ?>
                  <div class="col-md-12 company_carousel_card ">
                  <div class="col-md-12 bg-white mx-auto shadow company_carousel_text">
                 <p><?php echo $owl_item['text'];?> </p>
                  </div>
                  <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-3">
                  <div class="for_company_carousel_img">
                      <img src= "<?php echo 'assects/img/'.$owl_item['image']; ?>">
                  </div>
                </div>
                  <div class="col-md-8">
                  <div class="mx-auto c3 lead star_span text-left">
                     <i class="fa fa-star" aria-hidden="true"></i>
                     <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <span>
                     <i class="fa fa-star-half-o" aria-hidden="true"></i>
                     <i class="fa fa-star-half-o" aria-hidden="true"></i>
                      </span>
                  </div>
                  <div class="h4_tag_for_company_carousel_last text-left">
                      <h4><?php echo $owl_item['name']; ?></h4>
                      <span class="text-primary text-left"><?php echo $owl_item['depertment']; ?></span> 
                   </div>
                 </div>
                </div>   
              </div>
                <?php 
              }
            }
                ?> 
  </div>

</div>
</div>

</section>
   
    <section>
      <div class="container-fluid c my-5 py-5">
  <div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width:500px;">
      <h5 class="d-inline-block text-white text-uppercase b">Find A Doctor</h5>
      <h1 class="display-4 mb-4"><b>Find A Healthcare Professionals</b></h1>
      <h5 class="text-white">Duo ipsum erat stet dolor sea ut nonumy tempor. Tempor duo lorem eos sit sed ipsum takimata ipsum sit est. Ipsum ea voluptua ipsum sit justo</h5>
    </div>
    <div class="mx-auto" style="width:100%;max-width:600px;">
      <div class="input-group">
        <select class="form-select border-primary w-25 text-secondary text-center" style="height:60px;">
          <option selected="">Department</option>
          <option value="1">Department 1</option>
          <option value="2">Department 2</option>
          <option value="3">Department 3</option>
        </select>
        <input type="text" class="form-control border-primary w-50" style="height: 60px" placeholder="Keyword">
        <button class="btn btn-dark border-0 w-25">Search</button>
      </div>
    </div>
  </div>
</div>
</section>
<section>
   <div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5" style="max-width:500px;">
      <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Blog Post</h5>
      <h1 class="display-4">Our Latest Medical Blog Posts</h1>
    </div>
    <div class="row g-5">
      <div class="col-md-4 ">
        <div class="bg-light rounded overflow-hidden"><img class="img-fluid w-100" src="assects/img/blog-1.jpg">
          <div class="p-4"><a class="h3 d-block mb-3" href="#">Dolor clita vero elitr sea stet dolor justo  diam</a>
            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo</p>
          </div>
          <div class="d-flex justify-content-between border-top p-4">
            <div class="d-flex align-items-center"><img class="rounded-circle me-2" src="assects/img/user.jpg" width="25" height="25">  &nbsp; John Doe</div>
            <div class="d-flex align-items-center"><i class="fa fa-eye   text-primary" aria-hidden="true"></i>12345  &nbsp;<i class="fa fa-comment-o text-primary" aria-hidden="true"></i>123</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="bg-light rounded overflow-hidden"><img class="img-fluid w-100" src="assects/img/blog-2.jpg">
          <div class="p-4"><a class="h3 d-block mb-3" href="#">Dolor clita vero elitr sea stet dolor justo  diam</a>
            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo</p>
          </div>
          <div class="d-flex justify-content-between border-top p-4">
            <div class="d-flex align-items-center"><img class="rounded-circle me-2" src="assects/img/user.jpg" width="25" height="25" alt=" "> &nbsp; John Doe</div>
            <div class="d-flex align-items-center"><i class="fa fa-eye   text-primary" aria-hidden="true"></i>12345  &nbsp;<i class="fa fa-comment-o   text-primary" aria-hidden="true"></i>123</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="bg-light rounded overflow-hidden"><img class="img-fluid w-100" src="assects/img/blog-3.jpg">
          <div class="p-4"><a class="h3 d-block mb-3" href="#">Dolor clita vero elitr sea stet dolor justo  diam</a>
            <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna rebum clita rebum dolor stet amet justo</p>
          </div>
          <div class="d-flex justify-content-between border-top p-4">
            <div class="d-flex align-items-center"><img class="rounded-circle me-2" src="assects/img/user.jpg" width="25" height="25" alt=""> &nbsp; John Doe</div>
            <div class="d-flex align-items-center "><i class="fa fa-eye   text-primary" aria-hidden="true"></i>12345  &nbsp;<i class="fa fa-comment-o   text-primary" aria-hidden="true"></i>123</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<?php
include 'footer.php';
?>