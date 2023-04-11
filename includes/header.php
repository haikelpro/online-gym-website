
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logg.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="mailto:info@example.com">Abu.fua.hik.ser@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+48-123456789</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>              </ul>
            </div>
   <?php   
	{
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
{

 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Navigation -->
 <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>

              <ul class="dropdown-menu">
                <php>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
                  <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
                </php>
              </ul>
            </li>
          </ul>
        </div>

      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a>    </li>

          <li><a href="page.php?type=aboutus">About Us</a></li>
         
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
